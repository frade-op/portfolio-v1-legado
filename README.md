# Portfólio Pessoal — Felipe Frade (v1)

> ⚠️ **Projeto legado.** Este é um dos meus primeiros portfólios pessoais, criado no início da minha carreira como desenvolvedor. Ele foi mantido aqui como registro histórico da minha evolução como programador — não é um projeto ativo e não há planos de retomar seu desenvolvimento. Alguns padrões de código e decisões técnicas refletem o meu nível de conhecimento na época.

## 📖 Sobre o projeto

Site pessoal em formato de "one-page" interativa, onde ícones ao redor da foto de perfil abrem um modal com informações sobre:

- 💻 Linguagens e frameworks que eu utilizava;
- 💼 Experiência profissional;
- 💡 Pontos fortes e fracos;
- 🕒 Um pouco da minha história pessoal.

O layout usa transições de CSS para "abrir" o fundo da página em quatro direções (esquerda, direita, cima, baixo) conforme o ícone clicado, dando um efeito visual de destaque ao modal.

## 🛠️ Tecnologias utilizadas

- HTML5
- CSS3 (sem pré-processadores ou frameworks)
- JavaScript puro (Vanilla JS)
- PHP (versão alternativa da página, `index.php`, idêntica ao `index.html`)
- [Font Awesome](https://fontawesome.com/) via CDN, para os ícones

## 📁 Estrutura do projeto

```
├── index.html          # Página principal (versão estática)
├── index.php           # Mesma página, servida via PHP
└── assets/
    ├── css/
    │   ├── main.css     # Estilos gerais do layout e do modal
    │   ├── bg.css        # Animações/estilos do fundo interativo
    │   └── modal.css      # Estilos específicos do modal de conteúdo
    ├── img/               # Ícones SVG e foto de perfil
    └── js/
        └── scripts.js     # Lógica de abertura/fechamento do modal
```

## ▶️ Como executar localmente

Como é um site estático, basta abrir o arquivo `index.html` diretamente no navegador.

Caso prefira testar a versão em PHP (idêntica, mas servida via servidor):

```bash
php -S localhost:8000
```

E acesse [http://localhost:8000/index.php](http://localhost:8000/index.php).

## 📌 Observações

- Este projeto não possui build tools, gerenciador de dependências ou testes automatizados — é intencionalmente simples, como convém a um dos primeiros trabalhos de portfólio.
- Não recomendo usar este código como referência de boas práticas atuais; ele é mantido apenas por valor histórico/nostálgico.
