<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublishAppMessageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublishAppMessageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    * messageStructure  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    * timeToLive  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'messageStructure' => 'string',
            'timeToLive' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    * messageStructure  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    * timeToLive  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'messageStructure' => null,
        'timeToLive' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * message  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    * messageStructure  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    * timeToLive  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'messageStructure' => 'message_structure',
            'timeToLive' => 'time_to_live'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    * messageStructure  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    * timeToLive  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'messageStructure' => 'setMessageStructure',
            'timeToLive' => 'setTimeToLive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    * messageStructure  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    * timeToLive  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'messageStructure' => 'getMessageStructure',
            'timeToLive' => 'getTimeToLive'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['messageStructure'] = isset($data['messageStructure']) ? $data['messageStructure'] : null;
        $this->container['timeToLive'] = isset($data['timeToLive']) ? $data['timeToLive'] : '3600';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets message
    *  message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message message与message_structure二者选其一。  message, App消息发布。  message_structure, 使用消息结构体方式的App消息发布。  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"hps\": {     \"msg\": {       \"type\": 1,       \"body\": {         \"key\": \"value\"       }     }   } }  华为系统通知栏消息  {   \"hps\": {     \"msg\": {       \"type\": 3,       \"body\": {         \"content\": \"Push message content\",         \"title\": \"Push message content\"       },       \"action\": {         \"type\": 1,         \"param\": {           \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"         }       }     },     \"ext\": {       \"biTag\": \"Trump\",       \"icon\": \"http://upload.w.org/00/150pxsvg.png\"     }   } }  苹果平台消息格式 {   \"aps\": {     \"alert\": \"hello world\"   } }
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets messageStructure
    *  app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    *
    * @return string|null
    */
    public function getMessageStructure()
    {
        return $this->container['messageStructure'];
    }

    /**
    * Sets messageStructure
    *
    * @param string|null $messageStructure app推送的消息内容，当前支持的推送平台有HMS、APNS、APNS_SANDBOX。  HMS是为开发者提供的消息推送平台。  APNS和APNS_SANDBOX是用于推送iOS消息的服务平台。  HMS平台指定的消息内容不超过2K。  APNS和APNS_SANDBOX平台的消息内容不能超过4K。  推送平台的消息内容格式要求详情见application消息体格式。  华为透传消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 1,         \"body\": {           \"key\": \"value\"         }       }     }   } }  华为系统通知栏消息  {   \"HMS\": {     \"hps\": {       \"msg\": {         \"type\": 3,         \"body\": {           \"content\": \"Push message content\",           \"title\": \"Push message content\"         },         \"action\": {           \"type\": 1,           \"param\": {             \"intent\": \"#Intent;compo=com.rvr/.Activity;S.W=U;end\"           }         }       },       \"ext\": {         \"biTag\": \"Trump\",         \"icon\": \"http://upload.w.org/00/150pxsvg.png\"       }     }   } }  苹果平台消息格式  {   \"APNS\": {     \"aps\": {       \"alert\": \"hello world\"     }   } }
    *
    * @return $this
    */
    public function setMessageStructure($messageStructure)
    {
        $this->container['messageStructure'] = $messageStructure;
        return $this;
    }

    /**
    * Gets timeToLive
    *  消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @return string|null
    */
    public function getTimeToLive()
    {
        return $this->container['timeToLive'];
    }

    /**
    * Sets timeToLive
    *
    * @param string|null $timeToLive 消息发送的生存时间，是相对于发布时间的。  SMN系统将移动推送消息转交给推送平台前，会计算该消息在系统消耗的时间。只有消耗的时间小于time_to_live时，SMN才会将消息转交给推送平台，并将time_to_live减去消耗的时间传递给推送平台，否则消息废弃。  time _to_live的单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @return $this
    */
    public function setTimeToLive($timeToLive)
    {
        $this->container['timeToLive'] = $timeToLive;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

