import axios from 'axios'

const axiosClient = axios.create({
  // baseURL: import.meta.env.VITE_API_BASE_URL,
  // baseURL: 'https://www.themealdb.com/api/json/v1/1/', //meals

//   anime
     baseURL: 'http://127.0.0.1:8001/api/', //drinks

});


export default axiosClient;
