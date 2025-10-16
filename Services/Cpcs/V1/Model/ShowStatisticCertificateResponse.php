<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricName  资源名称
    * certificateClassifiedCounts  证书分布按算法和证书类型统计
    * certificateCountsByServerType  证书分布按服务类型统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricName' => 'string',
            'certificateClassifiedCounts' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]',
            'certificateCountsByServerType' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricName  资源名称
    * certificateClassifiedCounts  证书分布按算法和证书类型统计
    * certificateCountsByServerType  证书分布按服务类型统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricName' => null,
        'certificateClassifiedCounts' => null,
        'certificateCountsByServerType' => null
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
    * metricName  资源名称
    * certificateClassifiedCounts  证书分布按算法和证书类型统计
    * certificateCountsByServerType  证书分布按服务类型统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricName' => 'metric_name',
            'certificateClassifiedCounts' => 'certificate_classified_counts',
            'certificateCountsByServerType' => 'certificate_counts_by_server_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricName  资源名称
    * certificateClassifiedCounts  证书分布按算法和证书类型统计
    * certificateCountsByServerType  证书分布按服务类型统计
    *
    * @var string[]
    */
    protected static $setters = [
            'metricName' => 'setMetricName',
            'certificateClassifiedCounts' => 'setCertificateClassifiedCounts',
            'certificateCountsByServerType' => 'setCertificateCountsByServerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricName  资源名称
    * certificateClassifiedCounts  证书分布按算法和证书类型统计
    * certificateCountsByServerType  证书分布按服务类型统计
    *
    * @var string[]
    */
    protected static $getters = [
            'metricName' => 'getMetricName',
            'certificateClassifiedCounts' => 'getCertificateClassifiedCounts',
            'certificateCountsByServerType' => 'getCertificateCountsByServerType'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['certificateClassifiedCounts'] = isset($data['certificateClassifiedCounts']) ? $data['certificateClassifiedCounts'] : null;
        $this->container['certificateCountsByServerType'] = isset($data['certificateCountsByServerType']) ? $data['certificateCountsByServerType'] : null;
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
    * Gets metricName
    *  资源名称
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 资源名称
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets certificateClassifiedCounts
    *  证书分布按算法和证书类型统计
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]|null
    */
    public function getCertificateClassifiedCounts()
    {
        return $this->container['certificateClassifiedCounts'];
    }

    /**
    * Sets certificateClassifiedCounts
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]|null $certificateClassifiedCounts 证书分布按算法和证书类型统计
    *
    * @return $this
    */
    public function setCertificateClassifiedCounts($certificateClassifiedCounts)
    {
        $this->container['certificateClassifiedCounts'] = $certificateClassifiedCounts;
        return $this;
    }

    /**
    * Gets certificateCountsByServerType
    *  证书分布按服务类型统计
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]|null
    */
    public function getCertificateCountsByServerType()
    {
        return $this->container['certificateCountsByServerType'];
    }

    /**
    * Sets certificateCountsByServerType
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VendorCertificateStatistic[]|null $certificateCountsByServerType 证书分布按服务类型统计
    *
    * @return $this
    */
    public function setCertificateCountsByServerType($certificateCountsByServerType)
    {
        $this->container['certificateCountsByServerType'] = $certificateCountsByServerType;
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

