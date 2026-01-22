<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ltsEnable  是否开启LTS，1表示是，0表示不是
    * ltsLogGroupId  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamId  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamEnable  是否开启攻击日志流，1表示是，0表示不是
    * ltsAccessLogStreamId  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAccessLogStreamEnable  是否开启访问控制流，1表示是，0表示不是
    * ltsFlowLogStreamId  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsFlowLogStreamEnable  是否开启流量日志，1表示是，0表示不是
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'ltsEnable' => 'int',
            'ltsLogGroupId' => 'string',
            'ltsAttackLogStreamId' => 'string',
            'ltsAttackLogStreamEnable' => 'int',
            'ltsAccessLogStreamId' => 'string',
            'ltsAccessLogStreamEnable' => 'int',
            'ltsFlowLogStreamId' => 'string',
            'ltsFlowLogStreamEnable' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ltsEnable  是否开启LTS，1表示是，0表示不是
    * ltsLogGroupId  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamId  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamEnable  是否开启攻击日志流，1表示是，0表示不是
    * ltsAccessLogStreamId  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAccessLogStreamEnable  是否开启访问控制流，1表示是，0表示不是
    * ltsFlowLogStreamId  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsFlowLogStreamEnable  是否开启流量日志，1表示是，0表示不是
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'ltsEnable' => 'int32',
        'ltsLogGroupId' => null,
        'ltsAttackLogStreamId' => null,
        'ltsAttackLogStreamEnable' => 'int32',
        'ltsAccessLogStreamId' => null,
        'ltsAccessLogStreamEnable' => 'int32',
        'ltsFlowLogStreamId' => null,
        'ltsFlowLogStreamEnable' => 'int32'
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
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ltsEnable  是否开启LTS，1表示是，0表示不是
    * ltsLogGroupId  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamId  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamEnable  是否开启攻击日志流，1表示是，0表示不是
    * ltsAccessLogStreamId  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAccessLogStreamEnable  是否开启访问控制流，1表示是，0表示不是
    * ltsFlowLogStreamId  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsFlowLogStreamEnable  是否开启流量日志，1表示是，0表示不是
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'ltsEnable' => 'lts_enable',
            'ltsLogGroupId' => 'lts_log_group_id',
            'ltsAttackLogStreamId' => 'lts_attack_log_stream_id',
            'ltsAttackLogStreamEnable' => 'lts_attack_log_stream_enable',
            'ltsAccessLogStreamId' => 'lts_access_log_stream_id',
            'ltsAccessLogStreamEnable' => 'lts_access_log_stream_enable',
            'ltsFlowLogStreamId' => 'lts_flow_log_stream_id',
            'ltsFlowLogStreamEnable' => 'lts_flow_log_stream_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ltsEnable  是否开启LTS，1表示是，0表示不是
    * ltsLogGroupId  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamId  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamEnable  是否开启攻击日志流，1表示是，0表示不是
    * ltsAccessLogStreamId  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAccessLogStreamEnable  是否开启访问控制流，1表示是，0表示不是
    * ltsFlowLogStreamId  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsFlowLogStreamEnable  是否开启流量日志，1表示是，0表示不是
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'ltsEnable' => 'setLtsEnable',
            'ltsLogGroupId' => 'setLtsLogGroupId',
            'ltsAttackLogStreamId' => 'setLtsAttackLogStreamId',
            'ltsAttackLogStreamEnable' => 'setLtsAttackLogStreamEnable',
            'ltsAccessLogStreamId' => 'setLtsAccessLogStreamId',
            'ltsAccessLogStreamEnable' => 'setLtsAccessLogStreamEnable',
            'ltsFlowLogStreamId' => 'setLtsFlowLogStreamId',
            'ltsFlowLogStreamEnable' => 'setLtsFlowLogStreamEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ltsEnable  是否开启LTS，1表示是，0表示不是
    * ltsLogGroupId  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamId  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAttackLogStreamEnable  是否开启攻击日志流，1表示是，0表示不是
    * ltsAccessLogStreamId  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsAccessLogStreamEnable  是否开启访问控制流，1表示是，0表示不是
    * ltsFlowLogStreamId  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    * ltsFlowLogStreamEnable  是否开启流量日志，1表示是，0表示不是
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'ltsEnable' => 'getLtsEnable',
            'ltsLogGroupId' => 'getLtsLogGroupId',
            'ltsAttackLogStreamId' => 'getLtsAttackLogStreamId',
            'ltsAttackLogStreamEnable' => 'getLtsAttackLogStreamEnable',
            'ltsAccessLogStreamId' => 'getLtsAccessLogStreamId',
            'ltsAccessLogStreamEnable' => 'getLtsAccessLogStreamEnable',
            'ltsFlowLogStreamId' => 'getLtsFlowLogStreamId',
            'ltsFlowLogStreamEnable' => 'getLtsFlowLogStreamEnable'
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['ltsEnable'] = isset($data['ltsEnable']) ? $data['ltsEnable'] : null;
        $this->container['ltsLogGroupId'] = isset($data['ltsLogGroupId']) ? $data['ltsLogGroupId'] : null;
        $this->container['ltsAttackLogStreamId'] = isset($data['ltsAttackLogStreamId']) ? $data['ltsAttackLogStreamId'] : null;
        $this->container['ltsAttackLogStreamEnable'] = isset($data['ltsAttackLogStreamEnable']) ? $data['ltsAttackLogStreamEnable'] : null;
        $this->container['ltsAccessLogStreamId'] = isset($data['ltsAccessLogStreamId']) ? $data['ltsAccessLogStreamId'] : null;
        $this->container['ltsAccessLogStreamEnable'] = isset($data['ltsAccessLogStreamEnable']) ? $data['ltsAccessLogStreamEnable'] : null;
        $this->container['ltsFlowLogStreamId'] = isset($data['ltsFlowLogStreamId']) ? $data['ltsFlowLogStreamId'] : null;
        $this->container['ltsFlowLogStreamEnable'] = isset($data['ltsFlowLogStreamEnable']) ? $data['ltsFlowLogStreamEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
        if ($this->container['ltsEnable'] === null) {
            $invalidProperties[] = "'ltsEnable' can't be null";
        }
        if ($this->container['ltsLogGroupId'] === null) {
            $invalidProperties[] = "'ltsLogGroupId' can't be null";
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
    * Gets fwInstanceId
    *  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets ltsEnable
    *  是否开启LTS，1表示是，0表示不是
    *
    * @return int
    */
    public function getLtsEnable()
    {
        return $this->container['ltsEnable'];
    }

    /**
    * Sets ltsEnable
    *
    * @param int $ltsEnable 是否开启LTS，1表示是，0表示不是
    *
    * @return $this
    */
    public function setLtsEnable($ltsEnable)
    {
        $this->container['ltsEnable'] = $ltsEnable;
        return $this;
    }

    /**
    * Gets ltsLogGroupId
    *  LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    *
    * @return string
    */
    public function getLtsLogGroupId()
    {
        return $this->container['ltsLogGroupId'];
    }

    /**
    * Sets ltsLogGroupId
    *
    * @param string $ltsLogGroupId LTS日志分组id,可通过查询LTS（云日志服务）下查询账号下所有日志组接口获得，通过返回值中的log_groups.log_group_id（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setLtsLogGroupId($ltsLogGroupId)
    {
        $this->container['ltsLogGroupId'] = $ltsLogGroupId;
        return $this;
    }

    /**
    * Gets ltsAttackLogStreamId
    *  攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return string|null
    */
    public function getLtsAttackLogStreamId()
    {
        return $this->container['ltsAttackLogStreamId'];
    }

    /**
    * Sets ltsAttackLogStreamId
    *
    * @param string|null $ltsAttackLogStreamId 攻击日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setLtsAttackLogStreamId($ltsAttackLogStreamId)
    {
        $this->container['ltsAttackLogStreamId'] = $ltsAttackLogStreamId;
        return $this;
    }

    /**
    * Gets ltsAttackLogStreamEnable
    *  是否开启攻击日志流，1表示是，0表示不是
    *
    * @return int|null
    */
    public function getLtsAttackLogStreamEnable()
    {
        return $this->container['ltsAttackLogStreamEnable'];
    }

    /**
    * Sets ltsAttackLogStreamEnable
    *
    * @param int|null $ltsAttackLogStreamEnable 是否开启攻击日志流，1表示是，0表示不是
    *
    * @return $this
    */
    public function setLtsAttackLogStreamEnable($ltsAttackLogStreamEnable)
    {
        $this->container['ltsAttackLogStreamEnable'] = $ltsAttackLogStreamEnable;
        return $this;
    }

    /**
    * Gets ltsAccessLogStreamId
    *  访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return string|null
    */
    public function getLtsAccessLogStreamId()
    {
        return $this->container['ltsAccessLogStreamId'];
    }

    /**
    * Sets ltsAccessLogStreamId
    *
    * @param string|null $ltsAccessLogStreamId 访问控制日志流id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setLtsAccessLogStreamId($ltsAccessLogStreamId)
    {
        $this->container['ltsAccessLogStreamId'] = $ltsAccessLogStreamId;
        return $this;
    }

    /**
    * Gets ltsAccessLogStreamEnable
    *  是否开启访问控制流，1表示是，0表示不是
    *
    * @return int|null
    */
    public function getLtsAccessLogStreamEnable()
    {
        return $this->container['ltsAccessLogStreamEnable'];
    }

    /**
    * Sets ltsAccessLogStreamEnable
    *
    * @param int|null $ltsAccessLogStreamEnable 是否开启访问控制流，1表示是，0表示不是
    *
    * @return $this
    */
    public function setLtsAccessLogStreamEnable($ltsAccessLogStreamEnable)
    {
        $this->container['ltsAccessLogStreamEnable'] = $ltsAccessLogStreamEnable;
        return $this;
    }

    /**
    * Gets ltsFlowLogStreamId
    *  流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return string|null
    */
    public function getLtsFlowLogStreamId()
    {
        return $this->container['ltsFlowLogStreamId'];
    }

    /**
    * Sets ltsFlowLogStreamId
    *
    * @param string|null $ltsFlowLogStreamId 流量日志id,可通过查询LTS（云日志服务）下查询指定日志组下的所有日志流接口获得，通过返回值中的log_streams.log_stream_id（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setLtsFlowLogStreamId($ltsFlowLogStreamId)
    {
        $this->container['ltsFlowLogStreamId'] = $ltsFlowLogStreamId;
        return $this;
    }

    /**
    * Gets ltsFlowLogStreamEnable
    *  是否开启流量日志，1表示是，0表示不是
    *
    * @return int|null
    */
    public function getLtsFlowLogStreamEnable()
    {
        return $this->container['ltsFlowLogStreamEnable'];
    }

    /**
    * Sets ltsFlowLogStreamEnable
    *
    * @param int|null $ltsFlowLogStreamEnable 是否开启流量日志，1表示是，0表示不是
    *
    * @return $this
    */
    public function setLtsFlowLogStreamEnable($ltsFlowLogStreamEnable)
    {
        $this->container['ltsFlowLogStreamEnable'] = $ltsFlowLogStreamEnable;
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

