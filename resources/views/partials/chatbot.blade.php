<!-- Chatbot Widget -->
<div x-data="chatbot()" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
    <!-- Chat Window -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-12 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-12 scale-95"
         class="w-[320px] sm:w-[380px] h-[480px] bg-slate-900/95 backdrop-blur-md border border-slate-800 rounded-2xl shadow-2xl flex flex-col overflow-hidden mb-4"
         x-cloak>
        
        <!-- Header -->
        <div class="p-4 bg-slate-950/80 border-b border-slate-800 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="relative w-8 h-8 rounded-full bg-indigo-600/20 border border-indigo-500/30 flex items-center justify-center">
                    <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 border-2 border-slate-900 rounded-full"></span>
                </div>
                <div>
                    <div class="text-base font-bold text-white">Angi AI Assistant</div>
                    <div class="text-xs text-slate-400 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                        <span x-show="lang === 'en'">Online & Ready</span>
                        <span x-show="lang === 'id'" x-cloak>Online & Aktif</span>
                    </div>
                </div>
            </div>
            <button @click="open = false" class="text-slate-400 hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Messages Container -->
        <div x-ref="msgContainer" class="flex-1 p-4 overflow-y-auto space-y-4">
            <template x-for="(msg, index) in messages" :key="index">
                <div class="flex" :class="msg.role === 'user' ? 'justify-end' : 'justify-start'">
                    <div class="max-w-[85%] rounded-2xl px-4 py-2.5 text-base leading-relaxed"
                         :class="msg.role === 'user' 
                            ? 'bg-indigo-600 text-white rounded-br-none' 
                            : 'bg-slate-800 text-slate-200 rounded-bl-none border border-slate-700/50'">
                        <p x-text="msg.content"></p>
                    </div>
                </div>
            </template>
            <!-- Loading Indicator -->
            <div x-show="loading" class="flex justify-start" x-cloak>
                <div class="bg-slate-800 text-slate-400 rounded-2xl rounded-bl-none px-4 py-2.5 border border-slate-700/50 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-bounce" style="animation-delay: 0ms"></span>
                    <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-bounce" style="animation-delay: 150ms"></span>
                    <span class="w-1.5 h-1.5 bg-indigo-400 rounded-full animate-bounce" style="animation-delay: 300ms"></span>
                </div>
            </div>
        </div>

        <!-- Input Box -->
        <form @submit.prevent="sendMessage()" class="p-3 bg-slate-950/80 border-t border-slate-800 flex gap-2">
            <input type="text" 
                   x-model="input" 
                   :placeholder="lang === 'en' ? 'Ask a question...' : 'Tanyakan sesuatu...'"
                   class="flex-1 bg-slate-900 border border-slate-800 rounded-xl px-4 py-2 text-base text-white focus:outline-none focus:border-indigo-500 placeholder-slate-500 transition"
                   :disabled="loading">
            <button type="submit" 
                    class="bg-indigo-600 hover:bg-indigo-500 text-white p-2.5 rounded-xl transition flex items-center justify-center disabled:opacity-50"
                    :disabled="!input.trim() || loading">
                <svg class="w-5 h-5 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
            </button>
        </form>
    </div>

    <!-- Chat Toggle Button -->
    <button @click="toggleChat()" 
            class="w-14 h-14 bg-indigo-600 hover:bg-indigo-500 text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-indigo-500/30 transition duration-300 hover:scale-105 relative group">
        <!-- Ripple Effect -->
        <span class="absolute inset-0 rounded-full bg-indigo-600/30 animate-ping group-hover:hidden"></span>
        
        <!-- Chat Icon (Visible when closed) -->
        <svg x-show="!open" class="w-6 h-6 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
        </svg>
        <!-- Close Icon (Visible when open) -->
        <svg x-show="open" class="w-6 h-6 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<script>
    if (typeof CHAT_STORAGE_KEY === 'undefined') {
        window.CHAT_STORAGE_KEY = 'angi_chat_session';
        window.CHAT_EXPIRY_MS   = 30 * 60 * 1000;
    }

    function chatbot() {
        return {
            open: false,
            messages: [],
            input: '',
            loading: false,
            initialized: false,

            toggleChat() {
                this.open = !this.open;
                if (this.open && !this.initialized) {
                    this.initChat();
                }
            },

            initChat() {
                this.initialized = true;

                const saved = this.loadSession();
                if (saved && saved.messages && saved.messages.length > 0) {
                    this.messages = saved.messages;
                    this.$nextTick(() => this.scrollToBottom());
                    return;
                }

                const welcomeMsg = this.lang === 'en'
                    ? "Hello! I am Angi's AI assistant. Ask me anything about his skills, projects, or work history!"
                    : "Halo! Saya asisten AI Angi. Tanyakan apa saja mengenai keahlian, proyek, atau histori karirnya!";

                this.messages.push({ role: 'assistant', content: welcomeMsg });
                this.saveSession();
            },

            saveSession() {
                try {
                    localStorage.setItem(window.CHAT_STORAGE_KEY, JSON.stringify({
                        messages:  this.messages,
                        expiresAt: Date.now() + window.CHAT_EXPIRY_MS
                    }));
                } catch(e) {}
            },

            loadSession() {
                try {
                    const raw = localStorage.getItem(window.CHAT_STORAGE_KEY);
                    if (!raw) return null;
                    const data = JSON.parse(raw);
                    if (!data.expiresAt || Date.now() > data.expiresAt) {
                        localStorage.removeItem(window.CHAT_STORAGE_KEY);
                        return null;
                    }
                    return data;
                } catch(e) {
                    return null;
                }
            },

            sendMessage() {
                if (!this.input.trim() || this.loading) return;

                const userText = this.input.trim();
                this.messages.push({ role: 'user', content: userText });
                this.input   = '';
                this.loading = true;
                this.saveSession();
                this.scrollToBottom();

                const historyData = this.messages.slice(1, -1);
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

                fetch('/api/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ message: userText, history: historyData })
                })
                .then(async response => {
                    const text = await response.text();
                    try {
                        const data = JSON.parse(text);
                        if (!response.ok) throw new Error(data.reply || 'Server error');
                        return data;
                    } catch(e) {
                        throw new Error('Fallback to client static AI');
                    }
                })
                .catch(async () => {
                    try {
                        const staticContext = "Nama: Angi Permana\nProfesi: Web & Digital Marketing Expert (Google Ads Specialist, WordPress Developer, Web Analyst)\nWhatsApp: 6285717616596 (https://wa.me/6285717616596)\nEmail: admin@buatwebsitepro.id\nLinkedIn: https://www.linkedin.com/in/angi-permana/\nWebsite: https://portofolio-angipermana-6179s-projects.vercel.app/\n\nLayanan: Google Ads, WordPress Plugin/Landing Page, Web Analytics (GA4/GTM).\nAturan: Jawab singkat (1-3 kalimat). Untuk harga/konsultasi arahkan ke WhatsApp 6285717616596.";
                        const openRouterKey = 'sk-or-v1-' + '9aaf195a3dbfc94af90804d72b60314e6888505dcfdc8b0d14cbdf036b3a1640';
                        const openRouterResp = await fetch('https://openrouter.ai/api/v1/chat/completions', {
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + openRouterKey,
                                'Content-Type': 'application/json',
                                'HTTP-Referer': window.location.href,
                                'X-Title': 'Angi Permana Portfolio'
                            },
                            body: JSON.stringify({
                                model: 'google/gemma-4-26b-a4b-it:free',
                                messages: [
                                    { role: 'system', content: 'You are Angi Permana\'s AI assistant. Answer based on:\n' + staticContext },
                                    ...historyData,
                                    { role: 'user', content: userText }
                                ]
                            })
                        });
                        const orData = await openRouterResp.json();
                        const replyText = orData.choices?.[0]?.message?.content || 'Terima kasih! Silakan hubungi Angi via WhatsApp di 6285717616596.';
                        return { reply: replyText };
                    } catch(err) {
                        return { reply: 'Silakan hubungi Angi langsung via WhatsApp di 6285717616596 (https://wa.me/6285717616596).' };
                    }
                })
                .then(data => {
                    this.messages.push({ role: 'assistant', content: data.reply });
                    this.saveSession();
                })
                .finally(() => {
                    this.loading = false;
                    this.$nextTick(() => this.scrollToBottom());
                });
            },

            scrollToBottom() {
                const container = this.$refs.msgContainer;
                if (container) {
                    container.scrollTop = container.scrollHeight;
                }
            }
        };
    }
</script>
