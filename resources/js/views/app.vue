<template>
  <div>
    {{ message }}
  </div>
</template>



<script>
const default_layout = "default";
//import { formatDistance, subDays, isBefore } from "date-fns";
import { DateTime } from "luxon";
import moment from 'moment';

export default {
  computed: {},

  data() {
    return {
      message: "Hello World",
    };
  },
  mounted() {
   // var result = isBefore(new Date(1989, 6, 10), new Date(1987, 1, 11));
    var d1 = DateTime.fromISO("2017-04-30");
    var d2 = DateTime.fromISO("2017-04-01");

    var time = moment('2010-10-20').isBefore('2011-01-01', 'year');

    console.log(d2 < d1); //=> true
    console.log(d2 > d1); //=> false
    console.log(time);
  },
};
</script>