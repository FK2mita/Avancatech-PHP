<?php

// =========================================================================
// 1. A CLASSE ABSTRATA (A Planta da Casa / O Contrato)
// =========================================================================
abstract class TemplatePagina {

    // Os 9 métodos obrigatórios continuam aqui, intocáveis!
    abstract protected function definirTituloOculto();
    abstract protected function definirCorDeFundo();
    abstract protected function definirCorDoTexto();
    abstract protected function montarLogoCabecalho();
    abstract protected function montarMenuNavegacao();
    abstract protected function montarBannerPrincipal();
    abstract protected function montarConteudoCentral();
    abstract protected function montarRodape();
    abstract protected function incluirAvisoJavascript();

    // O método normal que orquestra a página. 
    // Dei uma leve "magia" no CSS para combinar com o tema de RPG!
    public function renderizarSite() {
        echo "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <title>" . $this->definirTituloOculto() . "</title>
            <style>
                body {
                    background-color: " . $this->definirCorDeFundo() . ";
                    color: " . $this->definirCorDoTexto() . ";
                    font-family: 'Trebuchet MS', serif; /* Fonte mais clássica */
                    margin: 0; padding: 0;
                    text-align: center;
                }
                /* Tema Dark Fantasy com detalhes em dourado e vermelho escuro */
                header { background: #111; border-bottom: 3px solid #8b0000; padding: 30px; text-shadow: 2px 2px #000; }
                header h1 { color: #d4af37; margin: 0; font-size: 2.5em; }
                nav { background: #222; padding: 15px; border-bottom: 1px solid #d4af37; }
                nav a { color: #d4af37; text-decoration: none; margin: 0 15px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; }
                nav a:hover { color: #fff; text-shadow: 0 0 10px #d4af37; }
                .banner { background: #2c1b0e; color: white; padding: 60px 20px; border-bottom: 3px solid #8b0000; box-shadow: inset 0 0 50px #000;}
                .banner h2 { font-size: 2.2em; color: #ffebcd; }
                .conteudo { padding: 40px 20px; max-width: 800px; margin: auto; background: rgba(0,0,0,0.6); border: 1px solid #444; border-radius: 10px; margin-top: 30px; margin-bottom: 80px; }
                footer { background: #000; color: #666; padding: 15px; position: fixed; bottom: 0; width: 100%; border-top: 2px solid #8b0000; }
            </style>
        </head>
        <body>
            <header>" . $this->montarLogoCabecalho() . "</header>
            <nav>" . $this->montarMenuNavegacao() . "</nav>
            <div class='banner'>" . $this->montarBannerPrincipal() . "</div>
            <div class='conteudo'>" . $this->montarConteudoCentral() . "</div>
            <footer>" . $this->montarRodape() . "</footer>
            <script> " . $this->incluirAvisoJavascript() . " </script>
        </body>
        </html>";
    }
}

// =========================================================================
// 2. A CLASSE CONCRETA (A Nova Guilda)
// =========================================================================
// O PHP obriga a Avaça Tech a preencher todos os 9 requisitos para existir.

class GuildaAvancaTech extends TemplatePagina {

    // 1
    protected function definirTituloOculto() {
        return "Avança Tech - Guilda de Aventureiros";
    }
    // 2
    protected function definirCorDeFundo() {
        return "#1a1a1d"; // Fundo cinza bem escuro (clima de masmorra)
    }
    // 3
    protected function definirCorDoTexto() {
        return "#e8d8c3"; // Cor de pergaminho claro para facilitar a leitura
    }
    // 4
    protected function montarLogoCabecalho() {
        return "<h1>⚔️ Guilda Avança Tech 🛡️</h1><p>Forjando Lendas. Conquistando Masmorras.</p>";
    }
    // 5
    protected function montarMenuNavegacao() {
        return "<a href='#'>Taverna</a> | <a href='#'>Mural de Missões</a> | <a href='#'>Arsenal</a> | <a href='#'>Alistar-se</a>";
    }
    // 6
    protected function montarBannerPrincipal() {
        return "<h2>A Humanidade Precisa da Sua Lâmina!</h2>
                <p>O mal espreita nas sombras e as trevas se espalham como uma praga. Pegue sua espada, prepare seus feitiços e venha conosco desbravar os perigos deste mundo. A riqueza e glória o aguarda!</p>";
    }
    // 7
    protected function montarConteudoCentral() {
        return "<h3>📜 Chamado aos Heróis</h3>
                <p>Estamos recrutando guerreiros, magos, clérigos e ladinos para cercos e saques épicos! 
                Nossa guilda oferece:</p>
                <ul style='list-style-type: none; padding: 0;'>
                    <li>🎲 <b>Divisão justa de loot:</b> Rolamos os dados à vista de todos!</li>
                    <li>🧪 <b>Suprimentos:</b> Poções de mana e vida gratuitas antes das raids.</li>
                    <li>🏆 <b>Glória:</b> Seu nome entalhado no nosso Salão dos Heróis.</li>
                </ul>
                <p><i><strong>Requisito mínimo: Nível 5 e não ter medo de encarar a morte cara a cara!</strong></i></p>";
    }
    // 8
    protected function montarRodape() {
        return "© Ano 1026 da Era dos Heróis - Avança Tech. Que os deuses tirem um 20 puro no dado icosaedro do destino.";
    }
    // 9
    protected function incluirAvisoJavascript() {
        return "alert('Um novo aventureiro se aproxima do balcão... Bem-vindo à Guilda Avança Tech!');";
    }
}

// =========================================================================
// 3. EXECUTANDO O CÓDIGO
// =========================================================================

// Instanciamos a nossa guilda
$paginaDaGuilda = new GuildaAvancaTech();

// Damos o comando para o método normal montar a página!
$paginaDaGuilda->renderizarSite();

?>