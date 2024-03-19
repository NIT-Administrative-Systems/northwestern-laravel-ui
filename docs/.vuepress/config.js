import { defineUserConfig } from 'vuepress';
import defaultTheme from '@vuepress/theme-default';
import { viteBundler } from '@vuepress/bundler-vite'
import { searchProPlugin } from 'vuepress-plugin-search-pro';
import { mdEnhancePlugin } from 'vuepress-plugin-md-enhance';

export default defineUserConfig({
    title: 'Northwestern Bootstrap Preset for Laravel',
    description: 'Adds a Northwestern Bootstrap theme into your Laravel application.',
    head: [
        ['link', { href: 'https://common.northwestern.edu/v8/icons/favicon-16.png', rel: 'icon', sizes: '16x16', type: 'image/png' }],
        ['link', { href: 'https://common.northwestern.edu/v8/icons/favicon-32.png', rel: 'icon', sizes: '32x32', type: 'image/png' }],
        ['link', { href: 'https://use.fontawesome.com/releases/v6.4.0/css/all.css', rel: 'stylesheet'}],
    ],
    pagePatterns: ['**/*.md', '!**/README.md', '!.vuepress', '!node_modules'],
    base: '/northwestern-laravel-ui/',

    bundler: viteBundler({
        viteOptions: {},
        vuePluginOptions: {},
    }),

    theme: defaultTheme({
        repo: 'NIT-Administrative-Systems/northwestern-laravel-ui',
        docsBranch: 'develop',
        docsDir: 'docs',
        editLink: true,
        editLinkText: 'Edit Page',
        lastUpdated: true,
        sidebarDepth: 1,

        sidebar: [
            { text: 'Getting Started', link: '/' },
            '/usage'
        ],
    }),
    plugins: [
        searchProPlugin({
            indexContent: true,
            searchDelay: 500,
            autoSuggestions: false,
        }),
        mdEnhancePlugin({
            tabs: true,
            footnote: true,
            mark: true,
            include: true,
        })
    ],
});