<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLinkFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLinkFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * engineType  引擎类型。
    * jobType  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    * jobDirection  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    * netType  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    * nodeType  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    * isMultiWrite  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'engineType' => 'string',
            'jobType' => 'string',
            'jobDirection' => 'string',
            'netType' => 'string',
            'nodeType' => 'string',
            'isMultiWrite' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * engineType  引擎类型。
    * jobType  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    * jobDirection  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    * netType  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    * nodeType  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    * isMultiWrite  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'engineType' => null,
        'jobType' => null,
        'jobDirection' => null,
        'netType' => null,
        'nodeType' => null,
        'isMultiWrite' => null
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
    * xLanguage  请求语言类型。
    * engineType  引擎类型。
    * jobType  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    * jobDirection  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    * netType  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    * nodeType  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    * isMultiWrite  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'engineType' => 'engine_type',
            'jobType' => 'job_type',
            'jobDirection' => 'job_direction',
            'netType' => 'net_type',
            'nodeType' => 'node_type',
            'isMultiWrite' => 'is_multi_write'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * engineType  引擎类型。
    * jobType  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    * jobDirection  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    * netType  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    * nodeType  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    * isMultiWrite  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'engineType' => 'setEngineType',
            'jobType' => 'setJobType',
            'jobDirection' => 'setJobDirection',
            'netType' => 'setNetType',
            'nodeType' => 'setNodeType',
            'isMultiWrite' => 'setIsMultiWrite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * engineType  引擎类型。
    * jobType  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    * jobDirection  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    * netType  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    * nodeType  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    * isMultiWrite  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'engineType' => 'getEngineType',
            'jobType' => 'getJobType',
            'jobDirection' => 'getJobDirection',
            'netType' => 'getNetType',
            'nodeType' => 'getNodeType',
            'isMultiWrite' => 'getIsMultiWrite'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['isMultiWrite'] = isset($data['isMultiWrite']) ? $data['isMultiWrite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型。
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets jobType
    *  任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 任务场景。取值：     - migration：实时迁移。     - sync：实时同步。     - cloudDataGuard：实时灾备。     - subscription：数据订阅。     - replay：录制回放。     - verify：校验任务。     - cdc：CDC任务。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobDirection
    *  任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 任务方向。取值：     - up：入云 ，灾备场景时对应本云为备。     - down：出云，灾备场景时对应本云为主。     - non-dbs：自建。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型。取值：     - eip：公网网络。     - vpc：VPC网络，灾备场景不支持选择VPC网络。     - vpn：VPN、专线网络。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets nodeType
    *  任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 任务实例规格类型。取值：     - micro：极小规格。     - small：小规格。     - medium：中规格。     - high：大规格。     - xlarge：超大规格。     - 2xlarge：极大规格。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets isMultiWrite
    *  灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @return bool|null
    */
    public function getIsMultiWrite()
    {
        return $this->container['isMultiWrite'];
    }

    /**
    * Sets isMultiWrite
    *
    * @param bool|null $isMultiWrite 灾备类型是否双主灾备。说明：     - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，is_multi_write取值true, 否则为false。     - job_type 是其他类型时，is_multi_write是非必选参数。
    *
    * @return $this
    */
    public function setIsMultiWrite($isMultiWrite)
    {
        $this->container['isMultiWrite'] = $isMultiWrite;
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

