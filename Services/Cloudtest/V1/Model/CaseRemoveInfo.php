<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaseRemoveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaseRemoveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目id
    * iteratorUri  迭代Uri
    * removeAssociateIssue  是否移除关联的issue
    * caseList  用例列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'iteratorUri' => 'string',
            'removeAssociateIssue' => 'bool',
            'caseList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseIdAndTypeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目id
    * iteratorUri  迭代Uri
    * removeAssociateIssue  是否移除关联的issue
    * caseList  用例列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'iteratorUri' => null,
        'removeAssociateIssue' => null,
        'caseList' => null
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
    * projectUuid  项目id
    * iteratorUri  迭代Uri
    * removeAssociateIssue  是否移除关联的issue
    * caseList  用例列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'iteratorUri' => 'iterator_uri',
            'removeAssociateIssue' => 'remove_associate_issue',
            'caseList' => 'case_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目id
    * iteratorUri  迭代Uri
    * removeAssociateIssue  是否移除关联的issue
    * caseList  用例列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'iteratorUri' => 'setIteratorUri',
            'removeAssociateIssue' => 'setRemoveAssociateIssue',
            'caseList' => 'setCaseList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目id
    * iteratorUri  迭代Uri
    * removeAssociateIssue  是否移除关联的issue
    * caseList  用例列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'iteratorUri' => 'getIteratorUri',
            'removeAssociateIssue' => 'getRemoveAssociateIssue',
            'caseList' => 'getCaseList'
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
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['iteratorUri'] = isset($data['iteratorUri']) ? $data['iteratorUri'] : null;
        $this->container['removeAssociateIssue'] = isset($data['removeAssociateIssue']) ? $data['removeAssociateIssue'] : null;
        $this->container['caseList'] = isset($data['caseList']) ? $data['caseList'] : null;
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
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets iteratorUri
    *  迭代Uri
    *
    * @return string|null
    */
    public function getIteratorUri()
    {
        return $this->container['iteratorUri'];
    }

    /**
    * Sets iteratorUri
    *
    * @param string|null $iteratorUri 迭代Uri
    *
    * @return $this
    */
    public function setIteratorUri($iteratorUri)
    {
        $this->container['iteratorUri'] = $iteratorUri;
        return $this;
    }

    /**
    * Gets removeAssociateIssue
    *  是否移除关联的issue
    *
    * @return bool|null
    */
    public function getRemoveAssociateIssue()
    {
        return $this->container['removeAssociateIssue'];
    }

    /**
    * Sets removeAssociateIssue
    *
    * @param bool|null $removeAssociateIssue 是否移除关联的issue
    *
    * @return $this
    */
    public function setRemoveAssociateIssue($removeAssociateIssue)
    {
        $this->container['removeAssociateIssue'] = $removeAssociateIssue;
        return $this;
    }

    /**
    * Gets caseList
    *  用例列表信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseIdAndTypeInfo[]|null
    */
    public function getCaseList()
    {
        return $this->container['caseList'];
    }

    /**
    * Sets caseList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseIdAndTypeInfo[]|null $caseList 用例列表信息
    *
    * @return $this
    */
    public function setCaseList($caseList)
    {
        $this->container['caseList'] = $caseList;
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

