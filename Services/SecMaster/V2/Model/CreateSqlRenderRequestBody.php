<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlRenderRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlRenderRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  查询语句
    * scriptParams  脚本参数
    * transformQuery  查询语句
    * sessionId  Console会话ID
    * timeZone  时区
    * interActiveParams  交互参数列表
    * from  起始
    * to  终止
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ScriptParam[]',
            'transformQuery' => 'string',
            'sessionId' => 'string',
            'timeZone' => 'string',
            'interActiveParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\InterActiveParams[]',
            'from' => 'int',
            'to' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  查询语句
    * scriptParams  脚本参数
    * transformQuery  查询语句
    * sessionId  Console会话ID
    * timeZone  时区
    * interActiveParams  交互参数列表
    * from  起始
    * to  终止
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'scriptParams' => null,
        'transformQuery' => null,
        'sessionId' => null,
        'timeZone' => null,
        'interActiveParams' => null,
        'from' => 'int64',
        'to' => 'int64'
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
    * query  查询语句
    * scriptParams  脚本参数
    * transformQuery  查询语句
    * sessionId  Console会话ID
    * timeZone  时区
    * interActiveParams  交互参数列表
    * from  起始
    * to  终止
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'scriptParams' => 'script_params',
            'transformQuery' => 'transform_query',
            'sessionId' => 'session_id',
            'timeZone' => 'time_zone',
            'interActiveParams' => 'inter_active_params',
            'from' => 'from',
            'to' => 'to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  查询语句
    * scriptParams  脚本参数
    * transformQuery  查询语句
    * sessionId  Console会话ID
    * timeZone  时区
    * interActiveParams  交互参数列表
    * from  起始
    * to  终止
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'scriptParams' => 'setScriptParams',
            'transformQuery' => 'setTransformQuery',
            'sessionId' => 'setSessionId',
            'timeZone' => 'setTimeZone',
            'interActiveParams' => 'setInterActiveParams',
            'from' => 'setFrom',
            'to' => 'setTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  查询语句
    * scriptParams  脚本参数
    * transformQuery  查询语句
    * sessionId  Console会话ID
    * timeZone  时区
    * interActiveParams  交互参数列表
    * from  起始
    * to  终止
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'scriptParams' => 'getScriptParams',
            'transformQuery' => 'getTransformQuery',
            'sessionId' => 'getSessionId',
            'timeZone' => 'getTimeZone',
            'interActiveParams' => 'getInterActiveParams',
            'from' => 'getFrom',
            'to' => 'getTo'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['transformQuery'] = isset($data['transformQuery']) ? $data['transformQuery'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['interActiveParams'] = isset($data['interActiveParams']) ? $data['interActiveParams'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 65535)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transformQuery']) && (mb_strlen($this->container['transformQuery']) > 65535)) {
                $invalidProperties[] = "invalid value for 'transformQuery', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['transformQuery']) && (mb_strlen($this->container['transformQuery']) < 1)) {
                $invalidProperties[] = "invalid value for 'transformQuery', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 36)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] > 1735689600000)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 1735689600000.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 1735689600000)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 1735689600000.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
            }
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
    * Gets query
    *  查询语句
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 查询语句
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本参数
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptParam[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptParam[]|null $scriptParams 脚本参数
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
        return $this;
    }

    /**
    * Gets transformQuery
    *  查询语句
    *
    * @return string|null
    */
    public function getTransformQuery()
    {
        return $this->container['transformQuery'];
    }

    /**
    * Sets transformQuery
    *
    * @param string|null $transformQuery 查询语句
    *
    * @return $this
    */
    public function setTransformQuery($transformQuery)
    {
        $this->container['transformQuery'] = $transformQuery;
        return $this;
    }

    /**
    * Gets sessionId
    *  Console会话ID
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId Console会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets interActiveParams
    *  交互参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\InterActiveParams[]|null
    */
    public function getInterActiveParams()
    {
        return $this->container['interActiveParams'];
    }

    /**
    * Sets interActiveParams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\InterActiveParams[]|null $interActiveParams 交互参数列表
    *
    * @return $this
    */
    public function setInterActiveParams($interActiveParams)
    {
        $this->container['interActiveParams'] = $interActiveParams;
        return $this;
    }

    /**
    * Gets from
    *  起始
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 起始
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  终止
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 终止
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
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

