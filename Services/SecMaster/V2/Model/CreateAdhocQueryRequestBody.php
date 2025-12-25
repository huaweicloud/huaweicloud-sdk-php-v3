<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAdhocQueryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAdhocQueryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  UUID
    * query  具体查询
    * queryType  查询类型
    * from  起始范围
    * to  终止范围
    * scriptParams  脚本参数列表
    * timeZone  时区
    * sqlRenderFrom  起始范围
    * sqlRenderTo  终止范围
    * sourcePage  源页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'query' => 'string',
            'queryType' => 'string',
            'from' => 'int',
            'to' => 'int',
            'scriptParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ScriptParam[]',
            'timeZone' => 'string',
            'sqlRenderFrom' => 'int',
            'sqlRenderTo' => 'int',
            'sourcePage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  UUID
    * query  具体查询
    * queryType  查询类型
    * from  起始范围
    * to  终止范围
    * scriptParams  脚本参数列表
    * timeZone  时区
    * sqlRenderFrom  起始范围
    * sqlRenderTo  终止范围
    * sourcePage  源页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'query' => null,
        'queryType' => null,
        'from' => 'int64',
        'to' => 'int64',
        'scriptParams' => null,
        'timeZone' => null,
        'sqlRenderFrom' => 'int64',
        'sqlRenderTo' => 'int64',
        'sourcePage' => null
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
    * sessionId  UUID
    * query  具体查询
    * queryType  查询类型
    * from  起始范围
    * to  终止范围
    * scriptParams  脚本参数列表
    * timeZone  时区
    * sqlRenderFrom  起始范围
    * sqlRenderTo  终止范围
    * sourcePage  源页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'query' => 'query',
            'queryType' => 'query_type',
            'from' => 'from',
            'to' => 'to',
            'scriptParams' => 'script_params',
            'timeZone' => 'time_zone',
            'sqlRenderFrom' => 'sql_render_from',
            'sqlRenderTo' => 'sql_render_to',
            'sourcePage' => 'source_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  UUID
    * query  具体查询
    * queryType  查询类型
    * from  起始范围
    * to  终止范围
    * scriptParams  脚本参数列表
    * timeZone  时区
    * sqlRenderFrom  起始范围
    * sqlRenderTo  终止范围
    * sourcePage  源页
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'query' => 'setQuery',
            'queryType' => 'setQueryType',
            'from' => 'setFrom',
            'to' => 'setTo',
            'scriptParams' => 'setScriptParams',
            'timeZone' => 'setTimeZone',
            'sqlRenderFrom' => 'setSqlRenderFrom',
            'sqlRenderTo' => 'setSqlRenderTo',
            'sourcePage' => 'setSourcePage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  UUID
    * query  具体查询
    * queryType  查询类型
    * from  起始范围
    * to  终止范围
    * scriptParams  脚本参数列表
    * timeZone  时区
    * sqlRenderFrom  起始范围
    * sqlRenderTo  终止范围
    * sourcePage  源页
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'query' => 'getQuery',
            'queryType' => 'getQueryType',
            'from' => 'getFrom',
            'to' => 'getTo',
            'scriptParams' => 'getScriptParams',
            'timeZone' => 'getTimeZone',
            'sqlRenderFrom' => 'getSqlRenderFrom',
            'sqlRenderTo' => 'getSqlRenderTo',
            'sourcePage' => 'getSourcePage'
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
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['sqlRenderFrom'] = isset($data['sqlRenderFrom']) ? $data['sqlRenderFrom'] : null;
        $this->container['sqlRenderTo'] = isset($data['sqlRenderTo']) ? $data['sqlRenderTo'] : null;
        $this->container['sourcePage'] = isset($data['sourcePage']) ? $data['sourcePage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 1024)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 63)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 5)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['sqlRenderFrom']) && ($this->container['sqlRenderFrom'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'sqlRenderFrom', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['sqlRenderFrom']) && ($this->container['sqlRenderFrom'] < 0)) {
                $invalidProperties[] = "invalid value for 'sqlRenderFrom', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sqlRenderTo']) && ($this->container['sqlRenderTo'] > -9223372036854775616)) {
                $invalidProperties[] = "invalid value for 'sqlRenderTo', must be smaller than or equal to -9223372036854775616.";
            }
            if (!is_null($this->container['sqlRenderTo']) && ($this->container['sqlRenderTo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sqlRenderTo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourcePage']) && (mb_strlen($this->container['sourcePage']) > 63)) {
                $invalidProperties[] = "invalid value for 'sourcePage', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['sourcePage']) && (mb_strlen($this->container['sourcePage']) < 5)) {
                $invalidProperties[] = "invalid value for 'sourcePage', the character length must be bigger than or equal to 5.";
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
    * Gets sessionId
    *  UUID
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
    * @param string|null $sessionId UUID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets query
    *  具体查询
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
    * @param string|null $query 具体查询
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets queryType
    *  查询类型
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询类型
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets from
    *  起始范围
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
    * @param int|null $from 起始范围
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
    *  终止范围
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
    * @param int|null $to 终止范围
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本参数列表
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
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptParam[]|null $scriptParams 脚本参数列表
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
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
    * Gets sqlRenderFrom
    *  起始范围
    *
    * @return int|null
    */
    public function getSqlRenderFrom()
    {
        return $this->container['sqlRenderFrom'];
    }

    /**
    * Sets sqlRenderFrom
    *
    * @param int|null $sqlRenderFrom 起始范围
    *
    * @return $this
    */
    public function setSqlRenderFrom($sqlRenderFrom)
    {
        $this->container['sqlRenderFrom'] = $sqlRenderFrom;
        return $this;
    }

    /**
    * Gets sqlRenderTo
    *  终止范围
    *
    * @return int|null
    */
    public function getSqlRenderTo()
    {
        return $this->container['sqlRenderTo'];
    }

    /**
    * Sets sqlRenderTo
    *
    * @param int|null $sqlRenderTo 终止范围
    *
    * @return $this
    */
    public function setSqlRenderTo($sqlRenderTo)
    {
        $this->container['sqlRenderTo'] = $sqlRenderTo;
        return $this;
    }

    /**
    * Gets sourcePage
    *  源页
    *
    * @return string|null
    */
    public function getSourcePage()
    {
        return $this->container['sourcePage'];
    }

    /**
    * Sets sourcePage
    *
    * @param string|null $sourcePage 源页
    *
    * @return $this
    */
    public function setSourcePage($sourcePage)
    {
        $this->container['sourcePage'] = $sourcePage;
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

