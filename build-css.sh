#!/bin/bash

# TailwindCSS CLI 构建脚本
# 使用方法:
#   chmod +x build-css.sh
#   ./build-css.sh          # 单次构建
#   ./build-css.sh watch    # 监听模式

TAILWIND_CLI="./tailwindcss"
OUTPUT_CSS="./public/css/tailwind.css"

# 检查 TailwindCSS CLI 是否存在
if [ ! -f "$TAILWIND_CLI" ]; then
    echo "❌ TailwindCSS CLI 未找到！"
    echo ""
    echo "请先下载 TailwindCSS CLI:"
    echo "  curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-linux-x64"
    echo "  chmod +x tailwindcss-linux-x64"
    echo "  mv tailwindcss-linux-x64 tailwindcss"
    echo ""
    exit 1
fi

# 判断是否为监听模式
if [ "$1" = "watch" ]; then
    echo "🎨 启动 TailwindCSS 监听模式..."
    $TAILWIND_CLI -o $OUTPUT_CSS -c tailwind.config.js --watch
else
    echo "🎨 构建 TailwindCSS..."
    $TAILWIND_CLI -o $OUTPUT_CSS -c tailwind.config.js
    echo "✅ 构建完成: $OUTPUT_CSS"
fi
