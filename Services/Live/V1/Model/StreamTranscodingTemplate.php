<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamTranscodingTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamTranscodingTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  推流域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * transType  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'transType' => 'string',
            'qualityInfo' => '\HuaweiCloud\SDK\Live\V1\Model\QualityInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  推流域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * transType  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'transType' => null,
        'qualityInfo' => null
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
    * domain  推流域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * transType  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'transType' => 'trans_type',
            'qualityInfo' => 'quality_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  推流域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * transType  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'transType' => 'setTransType',
            'qualityInfo' => 'setQualityInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  推流域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * transType  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'transType' => 'getTransType',
            'qualityInfo' => 'getQualityInfo'
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
    const TRANS_TYPE_PLAY = 'play';
    const TRANS_TYPE_PUBLISH = 'publish';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransTypeAllowableValues()
    {
        return [
            self::TRANS_TYPE_PLAY,
            self::TRANS_TYPE_PUBLISH,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['transType'] = isset($data['transType']) ? $data['transType'] : 'play';
        $this->container['qualityInfo'] = isset($data['qualityInfo']) ? $data['qualityInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTransTypeAllowableValues();
                if (!is_null($this->container['transType']) && !in_array($this->container['transType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['qualityInfo'] === null) {
            $invalidProperties[] = "'qualityInfo' can't be null";
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
    * Gets domain
    *  推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets transType
    *  转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    *
    * @return string|null
    */
    public function getTransType()
    {
        return $this->container['transType'];
    }

    /**
    * Sets transType
    *
    * @param string|null $transType 转码流触发模式。 - play：拉流触发转码。 - publish：推流触发转码。 默认为play
    *
    * @return $this
    */
    public function setTransType($transType)
    {
        $this->container['transType'] = $transType;
        return $this;
    }

    /**
    * Gets qualityInfo
    *  视频质量信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\QualityInfo[]
    */
    public function getQualityInfo()
    {
        return $this->container['qualityInfo'];
    }

    /**
    * Sets qualityInfo
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\QualityInfo[] $qualityInfo 视频质量信息
    *
    * @return $this
    */
    public function setQualityInfo($qualityInfo)
    {
        $this->container['qualityInfo'] = $qualityInfo;
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

