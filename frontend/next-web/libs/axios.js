import Axios from "axios";

const axios = Axios.create({
  baseURL: "http://localhost:9020",
  headers: {
    "X-Requested-With": "XMLHttpRequest",
  },
  withCredentials: true,
});

export default axios;
