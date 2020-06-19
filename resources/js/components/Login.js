import React from 'react';
import Cookies from 'universal-cookie';
import {createBrowserHistory} from "history";
import {Link} from "react-router-dom"

const cookies = new Cookies();

class Login extends React.Component {
    constructor(props) {
        super(props);
        this.state = {access_token: false, username: "", error: ""};

        this.getLogin = this.getLogin.bind(this);
        this.onChange = this.onChange.bind(this);
        this.clickSignIn = this.clickSignIn.bind(this);
        this.clickSignOut = this.clickSignOut.bind(this);
    }

    onChange(event) {
        //with validation. must have like validateFunc function
        var data = {};
        var elemName = event.currentTarget.name;
        var funcName = 'validate' + elemName.charAt(0).toUpperCase() + elemName.slice(1);
        data[elemName] = event.currentTarget.value;
        var result = this[funcName](data);
        if (result) {
            this.setState({error: result.join(",")})
        } else {
            this.setState({error: ""})
        }
        this.setState(data);
    }

    validateUsername() {
    }

    validatePassword() {
    }

    clickSignIn() {
        event.preventDefault();
        if (this.state.username === 'sdf' && this.state.password === 'sdf') {
            this.setState({access_token: "ready to use", username: "tiranosaur"});

            //if not save cookie - change session.php 'http_only' => false,
            cookies.set('access_token', 'accessTokenHash', {path: '/', expires: new Date(Date.now() + 1000 * 60 * 60)});
            cookies.set('username', this.state.username, {path: '/', expires: new Date(Date.now() + 1000 * 60 * 60)});
            this.getLogin();
        }
    }

    clickSignOut() {
        event.preventDefault();
        this.setState({access_token: false, username: ""});
        cookies.remove('access_token');
        cookies.remove('username');
        this.render();
    }

    getLogin() {
        if (cookies.get('access_token') && cookies.get('username')) {
            return (
                <div className={'container'}>
                    <span>Welcome {cookies.get('username')}</span>
                    <div>
                        <a href="#" className={"button"} onClick={this.clickSignOut}>SignOut</a>
                    </div>
                </div>
            )
        } else {
            return (
                <div className={'container'}>
                    <input type="text" id={'username'} name={'username'} placeholder={'UserName'}
                           onChange={this.onChange}/>
                    <input type="text" id={'password'} name={'password'} placeholder={'Password'}
                           onChange={this.onChange}/>
                    <div>
                        <Link className={"button"} to={'#'} onClick={this.clickSignIn}>SignIn</Link>
                        <Link className={"button"} to={'/signup'}>SignUp</Link>
                    </div>
                </div>
            )
        }
    }

    render() {
        return (
            this.getLogin()
        );
    }
}

export default Login;
