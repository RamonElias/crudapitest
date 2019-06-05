import axios from 'axios';

const client = axios.create({
   baseURL: '/api'
});

export default {
   all(params) {
      return client.get('users', params);
   },

   find(id) {
      return client.get(`users/${id}`);
   },

   update(id, data) {
      return client.put(`users/${id}`, data);
   },

   delete(id) {
      return client.delete(`users/${id}`);
   }
};

// import axios from 'axios';

// export default {
//    all() {
//       return axios.get('/api/users');
//    },

//    find(id) {
//       return axios.get(`/api/users/${id}`);
//    },

//    update(id, data) {
//       return axios.put(`/api/users/${id}`, data);
//    }
// };
