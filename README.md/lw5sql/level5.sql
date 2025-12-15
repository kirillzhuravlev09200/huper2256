SELECT u.id, u.name, SUM(o.total) AS total_spent
FROM users u
JOIN orders o ON u.id = o.user_id
GROUP BY u.id, u.name
HAVING SUM(o.total) > 1000;

SELECT o.id, o.total, u.name
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.total = (
    SELECT MAX(total) FROM orders
);

SELECT u.id, u.name, COUNT(o.id) AS orders_count
FROM users u
LEFT JOIN orders o ON u.id = o.user_id
GROUP BY u.id, u.name
HAVING COUNT(o.id) > (
    SELECT AVG(cnt) FROM (
        SELECT COUNT(o2.id) AS cnt
        FROM users u2
        LEFT JOIN orders o2 ON u2.id = o2.user_id
        GROUP BY u2.id
    ) AS counts
);
