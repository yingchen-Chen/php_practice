/* 累加 */
update `products` set `price`=`price`+1 where sid=1
/* datetime 不要用+的運算 */
select now(),now()+10000;
/* 單獨now()可得此刻年月日時 */

/* 訂單編號 10 的產品名稱 */
select o.member_sid, o.order_date, d.*, p.bookname
from `orders` o 
    join `order_details` d 
         on o.sid=d.order_sid
    join `products` p
         on p.sid=d.product_sid
where o.sid=10


select * from `orders` where `order_date` > '2017-01-01';

--子查詢
select product_sid sid from `order_details` where `order_sid`=10;

select * from`products` where sid in (
    select product_sid sid from `order_details` where `order_sid`=10;

)

select * from `products`
join (
    select product_sid, price od_price from `order_details` where `order_sid`=10 )od
/* 子查詢的文件簡稱叫od，一定要有設一個簡稱不然無法使用此查詢 */
on `products`.sid = od.product_sid;