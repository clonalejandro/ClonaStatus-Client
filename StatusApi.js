/**
 * Created by alejandrorioscalera
 * 12/05/2018
 *
 * -- SOCIAL NETWORKS --
 *
 * GitHub: https://github.com/clonalejandro or @clonalejandro
 * Website: https://clonalejandro.me/
 * Twitter: https://twitter.com/clonalejandro11/ or @clonalejandro11
 * Keybase: https://keybase.io/clonalejandro/
 *
 * -- LICENSE --
 *
 * All rights reserved for clonalejandro ©clonastatus 2017 / 2018
 */

class Interpreter {


    /** SMALL CONSTRUCTORS **/

    constructor(){
        this.domain = serializeDomain("https://server.clonalejandro.me/api/status/");
        this.init();
    }


    /** REST **/

    /**
     * This function manage the main process
     */
    init(){
        const reqGet = this.getRequest((err, data) => {
            if (err) console.log(err);
            else console.log(data);
        });
    }


    /**
     * This function returns a request for get the main api
     * @param callback
     * @returns {XMLHttpRequest}
     */
    getRequest(callback){
        const request = new XMLHttpRequest();

        request.open('GET', this.domain, true);
        request.responseType = 'json';
        request.onload = () => {
            if (request.status === 200) callback(null, request.response);
            else callback(request.status, request.response);
        };

        request.send();

        return request;
    }


}


/** OTHERS **/

/**
 * This function serialize the domain string
 * @param domain
 * @returns {string}
 */
function serializeDomain(domain) {
    const uri = new URL(document.URL);
    let _domain = "?domain=" + uri.searchParams.get("domain");
    const port = "&port=" + uri.searchParams.get("port");

    //Clean the domain parameter
    _domain = _domain.replace("https://", "");
    _domain = _domain.replace("http://", "");

    return domain + _domain + port;
}

