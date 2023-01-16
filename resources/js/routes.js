/**
 * Top level route components.
 */
const FrontendView = () => import('./components/FrontendView');
const Dashboard = () => import('./components/Dashboard');
const Domains = () => import('./components/Domains');
const AddDomain = () => import('./components/AddDomain');
const Settings = () => import('./components/Settings');
const CodeChallenge = () => import('./components/CodeChallenge');

/**
 * Create vue router and register top level routes.
 */
const routes = [
        {
            path: '/',
            name: 'jaadCoffee',
            component: FrontendView
        },
        {
            path: '/:user',
            name: 'dashhboard',
            component: Dashboard
        },
        {
            path: '/domains',
            name: 'domains',
            component: Domains
        },
        {
            path: '/domains/add',
            name: 'add-domain',
            component: AddDomain
        },
        {
            path: '/settings',
            name: 'settings',
            component: Settings
        },
        {
            path: '/code-challenge',
            name: 'code-challenge',
            component: CodeChallenge
        }
    ];

export default routes;