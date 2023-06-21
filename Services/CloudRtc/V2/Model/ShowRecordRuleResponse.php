<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRecordRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRecordRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则id，由服务端返回。创建或修改规则的时候不携带
    * appId  应用id
    * obsAddr  obsAddr
    * recordFormats  录制格式：HLS格式或者MP4格式
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'appId' => 'string',
            'obsAddr' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr',
            'recordFormats' => 'string[]',
            'hlsConfig' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig',
            'mp4Config' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig',
            'createTime' => 'string',
            'updateTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则id，由服务端返回。创建或修改规则的时候不携带
    * appId  应用id
    * obsAddr  obsAddr
    * recordFormats  录制格式：HLS格式或者MP4格式
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'appId' => null,
        'obsAddr' => null,
        'recordFormats' => null,
        'hlsConfig' => null,
        'mp4Config' => null,
        'createTime' => null,
        'updateTime' => null,
        'xRequestId' => null
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
    * ruleId  规则id，由服务端返回。创建或修改规则的时候不携带
    * appId  应用id
    * obsAddr  obsAddr
    * recordFormats  录制格式：HLS格式或者MP4格式
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'appId' => 'app_id',
            'obsAddr' => 'obs_addr',
            'recordFormats' => 'record_formats',
            'hlsConfig' => 'hls_config',
            'mp4Config' => 'mp4_config',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'xRequestId' => 'X-request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则id，由服务端返回。创建或修改规则的时候不携带
    * appId  应用id
    * obsAddr  obsAddr
    * recordFormats  录制格式：HLS格式或者MP4格式
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'appId' => 'setAppId',
            'obsAddr' => 'setObsAddr',
            'recordFormats' => 'setRecordFormats',
            'hlsConfig' => 'setHlsConfig',
            'mp4Config' => 'setMp4Config',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则id，由服务端返回。创建或修改规则的时候不携带
    * appId  应用id
    * obsAddr  obsAddr
    * recordFormats  录制格式：HLS格式或者MP4格式
    * hlsConfig  hlsConfig
    * mp4Config  mp4Config
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'appId' => 'getAppId',
            'obsAddr' => 'getObsAddr',
            'recordFormats' => 'getRecordFormats',
            'hlsConfig' => 'getHlsConfig',
            'mp4Config' => 'getMp4Config',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'xRequestId' => 'getXRequestId'
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
    const RECORD_FORMATS_HLS = 'HLS';
    const RECORD_FORMATS_MP4 = 'MP4';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordFormatsAllowableValues()
    {
        return [
            self::RECORD_FORMATS_HLS,
            self::RECORD_FORMATS_MP4,
        ];
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['obsAddr'] = isset($data['obsAddr']) ? $data['obsAddr'] : null;
        $this->container['recordFormats'] = isset($data['recordFormats']) ? $data['recordFormats'] : null;
        $this->container['hlsConfig'] = isset($data['hlsConfig']) ? $data['hlsConfig'] : null;
        $this->container['mp4Config'] = isset($data['mp4Config']) ? $data['mp4Config'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
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
    * Gets ruleId
    *  规则id，由服务端返回。创建或修改规则的时候不携带
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则id，由服务端返回。创建或修改规则的时候不携带
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets obsAddr
    *  obsAddr
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr|null
    */
    public function getObsAddr()
    {
        return $this->container['obsAddr'];
    }

    /**
    * Sets obsAddr
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordObsFileAddr|null $obsAddr obsAddr
    *
    * @return $this
    */
    public function setObsAddr($obsAddr)
    {
        $this->container['obsAddr'] = $obsAddr;
        return $this;
    }

    /**
    * Gets recordFormats
    *  录制格式：HLS格式或者MP4格式
    *
    * @return string[]|null
    */
    public function getRecordFormats()
    {
        return $this->container['recordFormats'];
    }

    /**
    * Sets recordFormats
    *
    * @param string[]|null $recordFormats 录制格式：HLS格式或者MP4格式
    *
    * @return $this
    */
    public function setRecordFormats($recordFormats)
    {
        $this->container['recordFormats'] = $recordFormats;
        return $this;
    }

    /**
    * Gets hlsConfig
    *  hlsConfig
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig|null
    */
    public function getHlsConfig()
    {
        return $this->container['hlsConfig'];
    }

    /**
    * Sets hlsConfig
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\HLSRecordConfig|null $hlsConfig hlsConfig
    *
    * @return $this
    */
    public function setHlsConfig($hlsConfig)
    {
        $this->container['hlsConfig'] = $hlsConfig;
        return $this;
    }

    /**
    * Gets mp4Config
    *  mp4Config
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig|null
    */
    public function getMp4Config()
    {
        return $this->container['mp4Config'];
    }

    /**
    * Sets mp4Config
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MP4RecordConfig|null $mp4Config mp4Config
    *
    * @return $this
    */
    public function setMp4Config($mp4Config)
    {
        $this->container['mp4Config'] = $mp4Config;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

