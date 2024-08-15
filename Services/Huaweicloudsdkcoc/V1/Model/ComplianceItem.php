<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComplianceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComplianceItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  节点id
    * title  补丁名称
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    * patchDetail  patchDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'title' => 'string',
            'classification' => 'string',
            'severityLevel' => 'string',
            'complianceLevel' => 'string',
            'patchDetail' => '\HuaweiCloud\SDK\Coc\V1\Model\PatchDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  节点id
    * title  补丁名称
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    * patchDetail  patchDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'title' => null,
        'classification' => null,
        'severityLevel' => null,
        'complianceLevel' => null,
        'patchDetail' => null
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
    * instanceId  节点id
    * title  补丁名称
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    * patchDetail  patchDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'title' => 'title',
            'classification' => 'classification',
            'severityLevel' => 'severity_level',
            'complianceLevel' => 'compliance_level',
            'patchDetail' => 'patch_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  节点id
    * title  补丁名称
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    * patchDetail  patchDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'title' => 'setTitle',
            'classification' => 'setClassification',
            'severityLevel' => 'setSeverityLevel',
            'complianceLevel' => 'setComplianceLevel',
            'patchDetail' => 'setPatchDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  节点id
    * title  补丁名称
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    * patchDetail  patchDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'title' => 'getTitle',
            'classification' => 'getClassification',
            'severityLevel' => 'getSeverityLevel',
            'complianceLevel' => 'getComplianceLevel',
            'patchDetail' => 'getPatchDetail'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['complianceLevel'] = isset($data['complianceLevel']) ? $data['complianceLevel'] : null;
        $this->container['patchDetail'] = isset($data['patchDetail']) ? $data['patchDetail'] : null;
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
    * Gets instanceId
    *  节点id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 节点id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets title
    *  补丁名称
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 补丁名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets classification
    *  分类
    *
    * @return string|null
    */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
    * Sets classification
    *
    * @param string|null $classification 分类
    *
    * @return $this
    */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;
        return $this;
    }

    /**
    * Gets severityLevel
    *  严重性级别
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel 严重性级别
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets complianceLevel
    *  合规性级别
    *
    * @return string|null
    */
    public function getComplianceLevel()
    {
        return $this->container['complianceLevel'];
    }

    /**
    * Sets complianceLevel
    *
    * @param string|null $complianceLevel 合规性级别
    *
    * @return $this
    */
    public function setComplianceLevel($complianceLevel)
    {
        $this->container['complianceLevel'] = $complianceLevel;
        return $this;
    }

    /**
    * Gets patchDetail
    *  patchDetail
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\PatchDetail|null
    */
    public function getPatchDetail()
    {
        return $this->container['patchDetail'];
    }

    /**
    * Sets patchDetail
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\PatchDetail|null $patchDetail patchDetail
    *
    * @return $this
    */
    public function setPatchDetail($patchDetail)
    {
        $this->container['patchDetail'] = $patchDetail;
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

