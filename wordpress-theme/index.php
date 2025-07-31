<?php get_header(); ?>

<div class="autobolt-landing">
    <!-- Hero Section -->
    <section class="relative min-h-screen gradient-hero" style="display: flex; align-items: center; justify-content: center; padding: 20px;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.2; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/dealership-bg.jpg'); background-size: cover; background-position: center;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <div class="grid lg:grid-cols-2" style="align-items: center;">
                <div style="text-align: center;">
                    <div style="display: inline-block; background: hsl(var(--secondary)); color: hsl(var(--secondary-foreground)); padding: 8px 16px; border-radius: 25px; font-weight: 600; animation: pulse 2s infinite; border: 2px solid hsl(var(--primary)); margin-bottom: 24px;">
                        OFERTA POR TEMPO LIMITADO
                    </div>
                    
                    <h1 class="text-white" style="margin-bottom: 24px;">
                        Autobolt: O Primeiro 
                        <span class="text-secondary"> Vendedor 24/7 </span>
                        para Sua Loja de Seminovos!
                    </h1>
                    
                    <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">
                        Atenda instantaneamente, venda muito mais e poupe custos com o Agente Autobolt. O agente que nunca dorme
                    </p>
                    
                    <div style="margin-bottom: 32px;">
                        <a href="https://wa.me/5511999999999" class="btn-primary">
                            QUERO O AUTOBOLT AGORA
                            <span style="margin-left: 8px;">→</span>
                        </a>
                    </div>
                </div>
                
                <div style="text-align: center;">
                    <div style="position: relative; display: inline-block;">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/gim-hero.jpg"
                            alt="Agente Autobolt"
                            class="float-animation"
                            style="width: 100%; max-width: 400px; border-radius: 16px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);"
                        />
                        <div style="position: absolute; top: -16px; right: -16px; background: hsl(var(--secondary)); color: hsl(var(--secondary-foreground)); padding: 8px 12px; border-radius: 20px; font-weight: 700; animation: bounce 1s infinite;">
                            IA VENDENDO 24/7!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem vs Solution -->
    <section class="section fade-in" id="section-problem">
        <div class="container">
            <div class="text-center mb-16">
                <h2>Por que sua loja precisa do Autobolt?</h2>
            </div>
            
            <div class="grid lg:grid-cols-2">
                <div>
                    <div class="text-center mb-8">
                        <div style="display: inline-flex; align-items: center; gap: 12px; background: #fef2f2; color: #dc2626; padding: 12px 24px; border-radius: 25px; font-weight: 700; font-size: 20px; margin-bottom: 32px; border: 1px solid #fecaca;">
                            🔴 PROBLEMA
                        </div>
                    </div>
                    
                    <div class="card problem-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">⏳ Clientes fogem ao esperar resposta humana.</p>
                    </div>
                    
                    <div class="card problem-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">💸 Vendedores perdem horas com perguntas repetitivas.</p>
                    </div>
                    
                    <div class="card problem-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">🌙 Vendas zero após o horário comercial.</p>
                    </div>
                </div>
                
                <div>
                    <div class="text-center mb-8">
                        <div style="display: inline-flex; align-items: center; gap: 12px; background: #f0fdf4; color: #16a34a; padding: 12px 24px; border-radius: 25px; font-weight: 700; font-size: 20px; margin-bottom: 32px; border: 1px solid #bbf7d0;">
                            🟢 SOLUÇÃO
                        </div>
                    </div>
                    
                    <div class="card solution-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">⚡ Autobolt responde em 3 segundos com todos os dados do veículo!</p>
                    </div>
                    
                    <div class="card solution-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">🤖 AUTOBOLT resolve 80% das dúvidas e transfere o lead qualificado!</p>
                    </div>
                    
                    <div class="card solution-card card-floating mb-6 p-8">
                        <p style="font-size: 18px; font-weight: 500; color: #374151;">🌗 Atendimento 24/7 – até de madrugada!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section bg-muted fade-in" id="section-features">
        <div class="container">
            <div class="text-center mb-16">
                <h2>Como o Autobolt Revoluciona Suas Vendas</h2>
                <p style="font-size: 20px; color: hsl(var(--muted-foreground)); max-width: 800px; margin: 0 auto;">
                    Três funcionalidades que transformam visitantes em compradores
                </p>
            </div>
            
            <div class="grid md:grid-cols-3">
                <div class="card card-floating text-center p-8">
                    <div class="feature-animation">💬 → 📞</div>
                    <h3 class="text-primary">Atendimento Automático Profissional</h3>
                    <p class="text-muted">Autobolt apresenta marca, modelo, ano, câmbio e outras informações importantes antes de transferir para o humano. Chega de responder a mesma coisa.</p>
                </div>
                
                <div class="card card-floating text-center p-8">
                    <div class="feature-animation">📸 → 📲</div>
                    <h3 class="text-primary">Fotos + Link Direto para WhatsApp</h3>
                    <p class="text-muted">O cliente já sai do chat com todas as fotos e o contato do vendedor!</p>
                </div>
                
                <div class="card card-floating text-center p-8">
                    <div class="feature-animation">📋 → 👨‍💼</div>
                    <h3 class="text-primary">Resumo da Conversa para o Vendedor</h3>
                    <p class="text-muted">Seu time recebe um histórico completo para fechar o negócio com assertividade!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section fade-in" id="section-testimonials">
        <div class="container">
            <div class="text-center mb-16">
                <h2>Lojas que usam Autobolt estão vendendo 30% mais:</h2>
            </div>
            
            <div class="grid lg:grid-cols-3">
                <div class="card card-floating p-8">
                    <div class="testimonial-stars">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <blockquote style="font-size: 18px; font-style: italic; margin-bottom: 24px;">
                        "Autobolt atende 90% das consultas iniciais! Nosso time agora foca só nos clientes prontos para comprar."
                    </blockquote>
                    <div style="border-top: 1px solid hsl(var(--border)); padding-top: 16px;">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/owner-roberto.jpg" 
                                alt="Roberto - AutoPremium MG"
                                class="owner-image"
                            />
                            <div>
                                <div style="font-weight: 600; color: hsl(var(--primary));">Roberto</div>
                                <div class="text-muted">AutoPremium MG</div>
                                <div class="testimonial-badge">📈 +40% conversão</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card card-floating p-8">
                    <div class="testimonial-stars">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <blockquote style="font-size: 18px; font-style: italic; margin-bottom: 24px;">
                        "Clientes adoram receber fotos e detalhes na hora! Reduzimos o tempo de venda pela metade."
                    </blockquote>
                    <div style="border-top: 1px solid hsl(var(--border)); padding-top: 16px;">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/owner-fernanda.jpg" 
                                alt="Fernanda - Motors RJ"
                                class="owner-image"
                            />
                            <div>
                                <div style="font-weight: 600; color: hsl(var(--primary));">Fernanda</div>
                                <div class="text-muted">Motors RJ</div>
                                <div class="testimonial-badge">⏱️ 50% mais rápido</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card card-floating p-8">
                    <div class="testimonial-stars">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <blockquote style="font-size: 18px; font-style: italic; margin-bottom: 24px;">
                        "Agora atendemos 24h sem custo extra. Autobolt virou nosso melhor vendedor!"
                    </blockquote>
                    <div style="border-top: 1px solid hsl(var(--border)); padding-top: 16px;">
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/owner-lucas.jpg" 
                                alt="Lucas - Seminovos SP"
                                class="owner-image"
                            />
                            <div>
                                <div style="font-weight: 600; color: hsl(var(--primary));">Lucas</div>
                                <div class="text-muted">Seminovos SP</div>
                                <div class="testimonial-badge">🌙 Vendas noturnas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bonus Section -->
    <section class="section bg-secondary-10 fade-in" id="section-bonus">
        <div class="container text-center">
            <div style="max-width: 900px; margin: 0 auto;">
                <h2 style="margin-bottom: 32px;">🎁 Bônus Exclusivo</h2>
                
                <div class="card card-floating" style="background: hsl(var(--secondary) / 0.2); border: 2px solid hsl(var(--secondary)); overflow: hidden;">
                    <div style="position: relative;">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/dashboard-netflix.jpg"
                            alt="Dashboard de Vídeo Aulas"
                            style="width: 100%; height: 200px; object-fit: cover;"
                        />
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                        <div style="position: absolute; bottom: 16px; left: 16px;">
                            <div style="display: inline-flex; align-items: center; gap: 8px; background: hsl(var(--secondary)); color: hsl(var(--secondary-foreground)); padding: 6px 12px; border-radius: 20px; font-size: 14px; font-weight: 600; animation: pulse 2s infinite;">
                                ▶️ Reproduzindo agora
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 style="font-size: 28px; font-weight: 700; color: hsl(var(--primary)); margin-bottom: 24px;">
                            Plataforma de Treinamento para Vendedor Humano
                        </h3>
                        <p style="font-size: 20px; color: hsl(var(--muted-foreground)); margin-bottom: 32px;">
                            Treinaremos os vendedores humanos da loja para não perder vendas, um guia completo com vídeo aulas focadas em resolver este problema.
                        </p>
                        
                        <div class="grid md:grid-cols-2" style="gap: 16px;">
                            <div style="display: flex; align-items: center; gap: 8px; color: #16a34a;">
                                <span class="checkmark">✓</span>
                                <span style="font-weight: 600;">Vídeo aulas profissionais</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px; color: #16a34a;">
                                <span class="checkmark">✓</span>
                                <span style="font-weight: 600;">Guia completo de vendas</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px; color: #16a34a;">
                                <span class="checkmark">✓</span>
                                <span style="font-weight: 600;">Interface intuitiva</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section gradient-primary fade-in" id="section-pricing">
        <div class="container text-center">
            <div class="text-white mb-12">
                <h2 style="color: white; margin-bottom: 16px;">Quanto custa ter um vendedor automático perfeito?</h2>
                <div style="max-width: 600px; margin: 0 auto 32px; background: white; border-radius: 16px; padding: 24px; border: 2px solid rgba(255, 193, 7, 0.5);">
                    <!-- Countdown Timer -->
                    <div class="countdown-timer">
                        <div class="countdown-item">
                            <div class="countdown-number" id="days">00</div>
                            <div class="countdown-label">Dias</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="hours">00</div>
                            <div class="countdown-label">Horas</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="minutes">00</div>
                            <div class="countdown-label">Min</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="seconds">00</div>
                            <div class="countdown-label">Seg</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card card-floating" style="max-width: 600px; margin: 0 auto;">
                <div class="p-12">
                    <div style="margin-bottom: 32px;">
                        <div class="grid md:grid-cols-2" style="gap: 32px;">
                            <div>
                                <div style="font-size: 14px; color: hsl(var(--muted-foreground)); margin-bottom: 8px;">Taxa de Setup</div>
                                <div class="price-strike">R$ 997</div>
                                <div class="price-current">R$ 497</div>
                                <div class="price-badge">(somente esta semana)</div>
                            </div>
                            <div>
                                <div style="font-size: 14px; color: hsl(var(--muted-foreground)); margin-bottom: 8px;">Mensalidade</div>
                                <div class="price-strike">R$ 247</div>
                                <div class="price-current">R$ 197/mês</div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="border-top: 1px solid hsl(var(--border)); padding-top: 32px; margin-bottom: 32px;">
                        <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 16px; color: hsl(var(--primary)); text-align: left;">O que está incluso:</h3>
                        <div class="grid md:grid-cols-2" style="gap: 16px; text-align: left;">
                            <div style="display: flex; align-items: center;">
                                <span class="checkmark">✓</span>
                                <span>Hospedagem + Servidor</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span class="checkmark">✓</span>
                                <span>Suporte 24/7</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span class="checkmark">✓</span>
                                <span>Atualizações gratuitas</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span class="checkmark">✓</span>
                                <span>Configuração completa</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="https://wa.me/5511999999999" class="btn-primary pulse-subtle" style="width: 100%; padding: 20px; font-size: 20px; margin-bottom: 16px;">
                        QUERO AGORA!
                        <span style="margin-left: 12px;">→</span>
                    </a>
                    
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px; color: #16a34a;">
                        <span>🛡️</span>
                        <span style="font-weight: 600;">7 dias para testar ou devolvemos seu dinheiro!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section fade-in" id="section-faq">
        <div class="container">
            <div class="text-center mb-16">
                <h2>Perguntas Frequentes</h2>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        E se o cliente fizer uma pergunta muito complexa?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        Autobolt repassa para o vendedor humano e envia um resumo completo da conversa! 
                        Seu time recebe todas as informações necessárias para continuar o atendimento 
                        de forma personalizada.
                    </div>
                </div>
                
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        O bot precisa de treinamento?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        O agente já está treinado. Autobolt já vem pronto para usar com linguagem de atendimento específicas para a sua loja de seminovos.
                    </div>
                </div>
                
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        Como funciona a integração com meu sistema atual?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        Autobolt se integra facilmente ao site da sua loja, a base de dados do agente será o site da própria loja. Nosso time técnico cuida de toda a integração sem interromper suas operações.
                    </div>
                </div>
                
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        Posso cancelar quando quiser?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        Sim! Não há fidelidade. Você pode cancelar a qualquer momento. 
                        Além disso, oferecemos 7 dias de garantia total - se não ficar satisfeito, 
                        devolvemos 100% do seu investimento.
                    </div>
                </div>
                
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        Autobolt integra com qual plataforma?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        AUTOBOLT INTEGRA COM TODAS AS PLATAFORMAS OLX, ML, WEBMOTORS, NAPISTA, MOBIAUTO, DENTRE OUTRAS.
                    </div>
                </div>
                
                <div class="accordion">
                    <button class="accordion-trigger" onclick="toggleAccordion(this)">
                        Qual a limitação do Autobolt?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        Limitado a 50 carros no estoque, para mais carros consulte valores.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section gradient-primary text-white text-center" style="position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to right, hsl(var(--primary) / 0.8), hsl(var(--secondary) / 0.8));"></div>
        <div class="container" style="position: relative; z-index: 10;">
            <h2 style="color: white; font-size: 36px; font-weight: 700; margin-bottom: 16px; animation: pulse 2s infinite;">
                Atenção! Esse sistema será implantando em um número limitados de lojas.
            </h2>
            <p style="font-size: 20px; margin-bottom: 32px; opacity: 0.9;">
                ⚠️ Atenção: Esta oferta é exclusiva para as 10 primeiras lojas que contratarem hoje.
            </p>
            <div style="display: inline-block; background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; border: 2px solid rgba(255,255,255,0.3); margin-bottom: 32px; width: 100%; max-width: 400px;">
                <a href="https://wa.me/5511999999999" style="background: white; color: hsl(var(--primary)); text-decoration: none; font-size: 24px; padding: 20px 48px; font-weight: 700; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); transform: hover:scale-105; transition: var(--transition-smooth); width: 100%; display: inline-block; border-radius: 12px;">
                    QUERO AGORA!
                    <span style="margin-left: 12px;">→</span>
                </a>
            </div>
            <div style="font-size: 14px; opacity: 0.75;">
                ⚡ Resposta em menos de 2 minutos
            </div>
        </div>
    </section>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/5511999999999" class="whatsapp-float">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp-icon.png" alt="WhatsApp" />
    </a>
</div>

<script>
// Countdown Timer
function updateCountdown() {
    const endDate = new Date();
    endDate.setDate(endDate.getDate() + 3); // 3 days from now
    
    const now = new Date().getTime();
    const distance = endDate.getTime() - now;
    
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
    document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
    document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
    document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();

// Accordion
function toggleAccordion(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.accordion-icon');
    
    if (content.classList.contains('active')) {
        content.classList.remove('active');
        icon.textContent = '+';
    } else {
        // Close all accordions
        document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('active'));
        document.querySelectorAll('.accordion-icon').forEach(i => i.textContent = '+');
        
        // Open current accordion
        content.classList.add('active');
        icon.textContent = '-';
    }
}

// Fade in animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});
</script>

<?php get_footer(); ?>