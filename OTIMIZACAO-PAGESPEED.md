# Instruções para melhorar o PageSpeed

## ⚠️ AÇÕES OBRIGATÓRIAS NO CLOUDFLARE

### 1. Desativar Rocket Loader (CRÍTICO - bloqueia ~470ms)
1. Painel do Cloudflare → **Speed** → **Optimization**
2. Role até **Rocket Loader** e selecione **Off**
3. Clique em **Save**

### 2. Desativar Auto Minify (CRÍTICO - combina CSS)
1. Painel do Cloudflare → **Speed** → **Optimization**  
2. Em **Auto Minify**, **desmarque todas as opções** (JS, CSS, HTML)
3. Clique em **Save**

### 3. Purgar Cache do Cloudflare
Após desativar as opções acima:
1. Painel do Cloudflare → **Caching** → **Configuration**
2. Clique em **Purge Everything**

### 4. Cache TTL (recomendado)
1. Painel do Cloudflare → **Caching** → **Configuration**
2. Em **Browser Cache TTL**, selecione **1 year**

---

## Otimizações implementadas no código

- ✅ **CSS crítico inline** (~2KB) - first paint imediato
- ✅ **CSS carregado via JavaScript** após DOMContentLoaded (evita bloqueio do Cloudflare)
- ✅ **Preload de fontes** (Catamaran, Kumbh Sans) - reduz CLS
- ✅ **min-height nos slider-btns** - reduz CLS
- ✅ **contain: layout** no hero - isola repaint
- ✅ **Logo em WebP** (~5KB vs ~15KB)
- ✅ **font-display: swap** em todas as fontes
- ✅ **Scripts com defer**
- ✅ **Cache de 1 ano** no .htaccess

---

## O que NÃO podemos controlar

- **rocket-loader.min.js** - injetado pelo Cloudflare (precisa desativar)
- **email-decode.min.js** - injetado pelo Cloudflare (desativa automaticamente quando Rocket Loader é desativado)
- **Fontes do reCAPTCHA** (KFO7CnqEu) - vem do Google, não controlável
- **beacon.min.js** - Cloudflare Analytics (pode desativar em Analytics se não usar)
