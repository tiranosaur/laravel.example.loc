import React from 'react';
import ReactDOM from 'react-dom';
import {createBrowserHistory} from "history";
import {Route, Switch, BrowserRouter, Link} from "react-router-dom"
import {map} from "lodash";

import Home from "./Home";
import About from "./About";
import Contact from "./Contact";
import Redirect from "react-router-dom/es/Redirect";


const routs = [
    {href: "/home", component: Home, title: "Home"},
    {href: "/about", component: About, title: "About"},
    {href: "/contact", component: Contact, title: "Contact"},

];

class App extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        const history = createBrowserHistory();
        return (
            <div className="content">
                <BrowserRouter>
                    <div className="links">
                        {map(routs, ({ href, title}) => (
                            <Link to={href}>{title}</Link>
                        ))}
                        <Switch>
                            <Route history={history} path={"/"} component={Home}/>
                            {map(routs, ({ href,component}) => (
                                <Route history={history} path={href} component={component}/>
                            ))}
                        </Switch>
                    </div>
                </BrowserRouter>
            </div>
        );
    }
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App/>, document.getElementById('root'));
}
