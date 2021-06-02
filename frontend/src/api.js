import axios from "axios"

export default class Api {
    constructor() {
        this.$client = new ApiClient();
        this.php = new PHPApi(this.$client);
    }
}

class PHPApi {
    constructor(httpClient) {
        this.$client = httpClient;
    }

    async exec(code) {
        return await this.$client.post('/execute', {code: code})
    }
}

class ApiClient {
    constructor() {
        this.url = process.env.VUE_APP_API_URL
    }

    async post(url, params = {}) {
        let res = await axios.post(this.url + url, params)
            .catch((err) => {
                console.log(err);
            })

        return res.data
    }

    async get(url, params = {}) {
        let res =  await axios.get(this.url + url, params)
            .catch((err) => {
                console.log(err);
            })

        return res.data
    }
}