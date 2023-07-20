<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotaResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotaResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * instanceEpsQuota  EPS实例资源配额数量，值为-1时表示配额无限制。
    * vcpusEpsQuota  EPS计算资源配额数量，值为-1时表示配额无限制。
    * ramEpsQuota  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    * volumeEpsQuota  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    * instanceUsed  EPS实例使用数量。
    * vcpusUsed  EPS计算资源使用数量。
    * ramUsed  EPS内存使用配额量，单位为GB。
    * volumeUsed  EPS磁盘使用配额量，单位为GB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'instanceEpsQuota' => 'int',
            'vcpusEpsQuota' => 'int',
            'ramEpsQuota' => 'int',
            'volumeEpsQuota' => 'int',
            'instanceUsed' => 'int',
            'vcpusUsed' => 'int',
            'ramUsed' => 'int',
            'volumeUsed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * instanceEpsQuota  EPS实例资源配额数量，值为-1时表示配额无限制。
    * vcpusEpsQuota  EPS计算资源配额数量，值为-1时表示配额无限制。
    * ramEpsQuota  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    * volumeEpsQuota  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    * instanceUsed  EPS实例使用数量。
    * vcpusUsed  EPS计算资源使用数量。
    * ramUsed  EPS内存使用配额量，单位为GB。
    * volumeUsed  EPS磁盘使用配额量，单位为GB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'instanceEpsQuota' => null,
        'vcpusEpsQuota' => null,
        'ramEpsQuota' => null,
        'volumeEpsQuota' => null,
        'instanceUsed' => null,
        'vcpusUsed' => null,
        'ramUsed' => null,
        'volumeUsed' => null
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
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * instanceEpsQuota  EPS实例资源配额数量，值为-1时表示配额无限制。
    * vcpusEpsQuota  EPS计算资源配额数量，值为-1时表示配额无限制。
    * ramEpsQuota  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    * volumeEpsQuota  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    * instanceUsed  EPS实例使用数量。
    * vcpusUsed  EPS计算资源使用数量。
    * ramUsed  EPS内存使用配额量，单位为GB。
    * volumeUsed  EPS磁盘使用配额量，单位为GB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'instanceEpsQuota' => 'instance_eps_quota',
            'vcpusEpsQuota' => 'vcpus_eps_quota',
            'ramEpsQuota' => 'ram_eps_quota',
            'volumeEpsQuota' => 'volume_eps_quota',
            'instanceUsed' => 'instance_used',
            'vcpusUsed' => 'vcpus_used',
            'ramUsed' => 'ram_used',
            'volumeUsed' => 'volume_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * instanceEpsQuota  EPS实例资源配额数量，值为-1时表示配额无限制。
    * vcpusEpsQuota  EPS计算资源配额数量，值为-1时表示配额无限制。
    * ramEpsQuota  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    * volumeEpsQuota  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    * instanceUsed  EPS实例使用数量。
    * vcpusUsed  EPS计算资源使用数量。
    * ramUsed  EPS内存使用配额量，单位为GB。
    * volumeUsed  EPS磁盘使用配额量，单位为GB。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'instanceEpsQuota' => 'setInstanceEpsQuota',
            'vcpusEpsQuota' => 'setVcpusEpsQuota',
            'ramEpsQuota' => 'setRamEpsQuota',
            'volumeEpsQuota' => 'setVolumeEpsQuota',
            'instanceUsed' => 'setInstanceUsed',
            'vcpusUsed' => 'setVcpusUsed',
            'ramUsed' => 'setRamUsed',
            'volumeUsed' => 'setVolumeUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * instanceEpsQuota  EPS实例资源配额数量，值为-1时表示配额无限制。
    * vcpusEpsQuota  EPS计算资源配额数量，值为-1时表示配额无限制。
    * ramEpsQuota  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    * volumeEpsQuota  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    * instanceUsed  EPS实例使用数量。
    * vcpusUsed  EPS计算资源使用数量。
    * ramUsed  EPS内存使用配额量，单位为GB。
    * volumeUsed  EPS磁盘使用配额量，单位为GB。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'instanceEpsQuota' => 'getInstanceEpsQuota',
            'vcpusEpsQuota' => 'getVcpusEpsQuota',
            'ramEpsQuota' => 'getRamEpsQuota',
            'volumeEpsQuota' => 'getVolumeEpsQuota',
            'instanceUsed' => 'getInstanceUsed',
            'vcpusUsed' => 'getVcpusUsed',
            'ramUsed' => 'getRamUsed',
            'volumeUsed' => 'getVolumeUsed'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['instanceEpsQuota'] = isset($data['instanceEpsQuota']) ? $data['instanceEpsQuota'] : null;
        $this->container['vcpusEpsQuota'] = isset($data['vcpusEpsQuota']) ? $data['vcpusEpsQuota'] : null;
        $this->container['ramEpsQuota'] = isset($data['ramEpsQuota']) ? $data['ramEpsQuota'] : null;
        $this->container['volumeEpsQuota'] = isset($data['volumeEpsQuota']) ? $data['volumeEpsQuota'] : null;
        $this->container['instanceUsed'] = isset($data['instanceUsed']) ? $data['instanceUsed'] : null;
        $this->container['vcpusUsed'] = isset($data['vcpusUsed']) ? $data['vcpusUsed'] : null;
        $this->container['ramUsed'] = isset($data['ramUsed']) ? $data['ramUsed'] : null;
        $this->container['volumeUsed'] = isset($data['volumeUsed']) ? $data['volumeUsed'] : null;
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
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets instanceEpsQuota
    *  EPS实例资源配额数量，值为-1时表示配额无限制。
    *
    * @return int|null
    */
    public function getInstanceEpsQuota()
    {
        return $this->container['instanceEpsQuota'];
    }

    /**
    * Sets instanceEpsQuota
    *
    * @param int|null $instanceEpsQuota EPS实例资源配额数量，值为-1时表示配额无限制。
    *
    * @return $this
    */
    public function setInstanceEpsQuota($instanceEpsQuota)
    {
        $this->container['instanceEpsQuota'] = $instanceEpsQuota;
        return $this;
    }

    /**
    * Gets vcpusEpsQuota
    *  EPS计算资源配额数量，值为-1时表示配额无限制。
    *
    * @return int|null
    */
    public function getVcpusEpsQuota()
    {
        return $this->container['vcpusEpsQuota'];
    }

    /**
    * Sets vcpusEpsQuota
    *
    * @param int|null $vcpusEpsQuota EPS计算资源配额数量，值为-1时表示配额无限制。
    *
    * @return $this
    */
    public function setVcpusEpsQuota($vcpusEpsQuota)
    {
        $this->container['vcpusEpsQuota'] = $vcpusEpsQuota;
        return $this;
    }

    /**
    * Gets ramEpsQuota
    *  EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    *
    * @return int|null
    */
    public function getRamEpsQuota()
    {
        return $this->container['ramEpsQuota'];
    }

    /**
    * Sets ramEpsQuota
    *
    * @param int|null $ramEpsQuota EPS内存资源配额量，单位为GB，值为-1时表示配额无限制。
    *
    * @return $this
    */
    public function setRamEpsQuota($ramEpsQuota)
    {
        $this->container['ramEpsQuota'] = $ramEpsQuota;
        return $this;
    }

    /**
    * Gets volumeEpsQuota
    *  EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    *
    * @return int|null
    */
    public function getVolumeEpsQuota()
    {
        return $this->container['volumeEpsQuota'];
    }

    /**
    * Sets volumeEpsQuota
    *
    * @param int|null $volumeEpsQuota EPS磁盘资源配额量，单位为GB，值为-1时表示配额无限制。
    *
    * @return $this
    */
    public function setVolumeEpsQuota($volumeEpsQuota)
    {
        $this->container['volumeEpsQuota'] = $volumeEpsQuota;
        return $this;
    }

    /**
    * Gets instanceUsed
    *  EPS实例使用数量。
    *
    * @return int|null
    */
    public function getInstanceUsed()
    {
        return $this->container['instanceUsed'];
    }

    /**
    * Sets instanceUsed
    *
    * @param int|null $instanceUsed EPS实例使用数量。
    *
    * @return $this
    */
    public function setInstanceUsed($instanceUsed)
    {
        $this->container['instanceUsed'] = $instanceUsed;
        return $this;
    }

    /**
    * Gets vcpusUsed
    *  EPS计算资源使用数量。
    *
    * @return int|null
    */
    public function getVcpusUsed()
    {
        return $this->container['vcpusUsed'];
    }

    /**
    * Sets vcpusUsed
    *
    * @param int|null $vcpusUsed EPS计算资源使用数量。
    *
    * @return $this
    */
    public function setVcpusUsed($vcpusUsed)
    {
        $this->container['vcpusUsed'] = $vcpusUsed;
        return $this;
    }

    /**
    * Gets ramUsed
    *  EPS内存使用配额量，单位为GB。
    *
    * @return int|null
    */
    public function getRamUsed()
    {
        return $this->container['ramUsed'];
    }

    /**
    * Sets ramUsed
    *
    * @param int|null $ramUsed EPS内存使用配额量，单位为GB。
    *
    * @return $this
    */
    public function setRamUsed($ramUsed)
    {
        $this->container['ramUsed'] = $ramUsed;
        return $this;
    }

    /**
    * Gets volumeUsed
    *  EPS磁盘使用配额量，单位为GB。
    *
    * @return int|null
    */
    public function getVolumeUsed()
    {
        return $this->container['volumeUsed'];
    }

    /**
    * Sets volumeUsed
    *
    * @param int|null $volumeUsed EPS磁盘使用配额量，单位为GB。
    *
    * @return $this
    */
    public function setVolumeUsed($volumeUsed)
    {
        $this->container['volumeUsed'] = $volumeUsed;
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

