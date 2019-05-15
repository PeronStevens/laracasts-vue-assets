import Logos from './components/Logos';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Loaders from './components/Loaders';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/Notfound';

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {   
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logos
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders',
            component: Loaders
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        }             
    ]
}