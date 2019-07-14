layui.use('rate', function(){
    var rate = layui.rate;

    //渲染
    var ins1 = rate.render({
        elem: '#rate',  //绑定元素
        value: gradee
    });
});