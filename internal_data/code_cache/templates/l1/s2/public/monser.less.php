<?php
// FROM HASH: 1378e656a2838527cd63c2c8abec3e72
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('mdm_footer', ), false)) {
		$__finalCompiled .= '
.p-footer-inner {
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 61px !important;
    margin-bottom: 30px !important;
    font-family: "Acrom";
	
	.mdm-footer-item
	{
		display: flex;
		
		.mdm-footer-item-leftblock
		{
			display: -webkit-box;
    		display: -ms-flexbox;
    		display: flex;
    		-webkit-box-orient: vertical;
    		-webkit-box-direction: normal;
    		-ms-flex-direction: column;
    		flex-direction: column;
			
			.mdm-footer-item-social
			{
				-webkit-box-align: center;
    			-ms-flex-align: center;
    			align-items: center;
    			display: -webkit-box;
    			display: -ms-flexbox;
    			display: flex;
    			opacity: .8;
    			gap: 40px;
			}
			
			.mdm-footer-item-copyright
			{
				padding-top: 30px;
    			opacity: .8;
				
				.mdm-footer-item-copyright-info p
				{
					margin: 0;
    				font-style: normal;
    				font-weight: 500;
    				line-height: 12px;
    				font-size: 10px;
    				color: rgba(255, 255, 255, 0.8);
					
					&:last-child
					{
						padding-top: 10px;
    					padding-bottom: 50px
					}
				}
			}
		}
		
		.mdm-footer-item-logo
		{
			text-align: center;
    		-webkit-box-align: center;
    		-ms-flex-align: center;
    		align-items: center;
    		margin: 0 auto;
			
			.mdm-footer-item-selectors
			{
				display: flex;
    			gap: 10px;
    			font-size: 11px;
    			flex-direction: column;
    			margin-top: 20px;
				
				li
				{
					list-style: none;
				}
			}
		}
		
		.mdm-footer-item-rightblock
		{
			display: -webkit-box;
    		display: -ms-flexbox;
    		display: flex;
    		-webkit-box-orient: vertical;
    		-webkit-box-direction: normal;
    		-ms-flex-direction: column;
    		flex-direction: column;
			
			.mdm-footer-item-payment
			{
				display: -webkit-box;
    			display: -ms-flexbox;
    			display: flex;
    			-webkit-box-align: center;
    			-ms-flex-align: center;
    			align-items: center;
    			padding-top: 5px;
    			padding-bottom: 25px;
    			gap: 40px;
				
				img
				{
					opacity: .8;
    				width: 65px;
   	 				min-height: 22px
				}
			}
			
			.mdm-footer-item-files
			{
				display: -webkit-box;
    			display: -ms-flexbox;
    			display: flex;
    			-webkit-box-orient: vertical;
    			-webkit-box-direction: normal;
    			-ms-flex-direction: column;
    			flex-direction: column;
				
				a
				{
					color: rgba(255,255,255,0.8);
    				opacity: .8;
    				font-style: normal;
    				font-weight: 500;
    				font-size: 10px;
    				line-height: 12px;
    				-ms-flex-wrap: wrap;
    				flex-wrap: wrap;
    				-webkit-box-pack: right;
    				-ms-flex-pack: right;
    				justify-content: right;
    				display: -webkit-box;
    				display: -ms-flexbox;
    				display: flex;
					
					&:last-child
					{
						padding-top: 10px
					}
				}
			}
		}
	}
}

@media (max-width: 650px) {
    .mdm-footer-item {
        -webkit-box-orient:vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .mdm-footer-item-social {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        gap: 60px !important;
    }

    .mdm-footer-item-copyright {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 14px;
        padding-top: 50px;
        gap: 50px
    }

    .mdm-footer-item-copyright p {
        font-size: 13px
    }

    .mdm-footer-item-copyright p:last-child {
        padding-top: 0px
    }

    .mdm-footer-item-rightblock {
        margin-top: 30px
    }

    .mdm-footer-item-files {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        align-items: center;
        gap: 15px
    }

    .mdm-footer-item-files a {
        font-size: 13px
    }
}

.p-footer-row
{
	display: none;
}

.p-footer-copyright
{
	display: none;
}
';
	}
	return $__finalCompiled;
}
);