<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDashBoardRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDashBoardRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardId  仪表盘id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    * version  仪表盘版本号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardId' => 'string',
            'enterpriseProjectId' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardId  仪表盘id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    * version  仪表盘版本号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardId' => null,
        'enterpriseProjectId' => null,
        'version' => null
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
    * dashboardId  仪表盘id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    * version  仪表盘版本号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardId' => 'dashboard_id',
            'enterpriseProjectId' => 'Enterprise-Project-Id',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardId  仪表盘id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    * version  仪表盘版本号。
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardId' => 'setDashboardId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardId  仪表盘id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    * version  仪表盘版本号。
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardId' => 'getDashboardId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'version' => 'getVersion'
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
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dashboardId'] === null) {
            $invalidProperties[] = "'dashboardId' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets dashboardId
    *  仪表盘id。
    *
    * @return string
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string $dashboardId 仪表盘id。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
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
    * @param string|null $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。  -  查询单个企业项目下实例，填写企业项目id。  -  查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets version
    *  仪表盘版本号。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 仪表盘版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

