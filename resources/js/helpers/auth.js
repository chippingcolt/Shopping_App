import Axios from "axios";
import { userInfo } from "os";

export function register(credentials){
    return new Promise((res, rej) => {
        Axios.post('/api/register', credentials)
            .then((Response) => {
                res(Response.data);
                console.log(Response.data.token);
            })
            .catch((err) =>{
                rej("Wrong email or password");
            })
    })
}

export function login(credentials){
    return new Promise((res, rej) => {
        Axios.post('/api/login', credentials)
            .then((Response) => {
                res(Response.data);
            })
            .catch((err) =>{
                rej("Wrong email or password");
            })
    })
}

export function getLocalUser() {
    const userStr = localStorage.getItem("user");

    if(!userStr){
        return null;
    }

    return JSON.parse(userStr);
}