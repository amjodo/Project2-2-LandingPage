game.SpearThrow = me.Entity.extend({
    init: function(x, y, settings, facing){
        this._super(me.Entity, 'init', [x, y, {
        image: "spear",
        width: 48,
        height: 48,
        spritewidth: "48",
        spriteheight: "48",
        //already had this code from 2-23
        getShape: function(){
            return (new me.Rect(0, 0, 48, 48)).toPolygon();
        }
        
     }]);
       
        this.alwaysUpdate = true;        
              
        this.body.setVelocity(8, 0);
        
        this.attack = game.data.ability3 * 3;
        
        this.type = "spear";
        this.facing = facing;
        
    },
    
    update: function(delta){
        
        if(this.facing === "left")
        {
            this.body.vel.x -= this.body.accel.x * me.timer.tick;
        }//already had this code lines 29-43
        else{
            this.body.vel.x += this.body.accel.x * me.timer.tick;
        }
        
            //check for collision, if true activate collideHandler function
            me.collision.check(this, true, this.collideHandler.bind(this), true);

            // creep fall to the ground
            this.body.update(delta);

            this._super(me.Entity, "update", [delta]);
            return true;


            return true;
    },
    //already had code 50-57
    collideHandler: function(response)
      {
	if(response.b.type === 'EnemyBase' || response.b.type === 'EnemyCreep')
           {       
	    response.b.loseHealth(this.attack);
            me.game.world.removeChild(this);
	   }
       }
});