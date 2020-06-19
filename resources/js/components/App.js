import React from 'react';
import ReactDOM from 'react-dom';
import {createBrowserHistory} from "history";
import {Redirect, Route, Switch, BrowserRouter, Link} from "react-router-dom"
import {map} from "lodash";

import Home from "./Home";
import About from "./About";
import Contact from "./Contact";
import SignUp from "./SignUp";
import Login from "./Login";

const history = createBrowserHistory();
const menu = [
    {href: "/home", component: Home, title: "Home", menu: true},
    {href: "/about", component: About, title: "About", menu: true},
    {href: "/contact", component: Contact, title: "Contact", menu: true},
    {href: "/signup", component: SignUp, title: "SignUp", menu: false},
];

class App extends React.Component {
    constructor(props) {
        super(props);

        this.getMenu = this.getMenu.bind(this);
    }

    getMenu() {
        return menu.filter(function (value) {
            return value.menu === true;
        })
    }

    render() {
        return (
            <div className="content">
                <BrowserRouter>
                    <div className="links">
                        {map(this.getMenu(), ({href, title, menu}) =>
                            (<Link to={href}>{title}</Link>))}
                        <Login/>
                    </div>
                    <Switch>
                        {map(menu, ({href, component}) =>
                            (<Route history={history} path={href} component={component}/>))}
                        <Route history={history} path={"/"} component={Home}/>
                    </Switch>
                </BrowserRouter>
            </div>
        );
    }
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App/>, document.getElementById('root'));
}
