<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目id
    * iteratorUri  迭代uri
    * type  资源类型, 对应serviceType
    * isAllIssues  是否选择issues
    * allImport  是否选择所有用例
    * featureUri  按照目录引入用例
    * simpleResourceinfoList  选择的资源列表, 对应sourceCaseUris
    * invertSimpleResourceinfoList  反选的资源列表
    * addToIterator  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'iteratorUri' => 'string',
            'type' => 'int',
            'isAllIssues' => 'string',
            'allImport' => 'bool',
            'featureUri' => 'string',
            'simpleResourceinfoList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]',
            'invertSimpleResourceinfoList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]',
            'addToIterator' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目id
    * iteratorUri  迭代uri
    * type  资源类型, 对应serviceType
    * isAllIssues  是否选择issues
    * allImport  是否选择所有用例
    * featureUri  按照目录引入用例
    * simpleResourceinfoList  选择的资源列表, 对应sourceCaseUris
    * invertSimpleResourceinfoList  反选的资源列表
    * addToIterator  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'iteratorUri' => null,
        'type' => 'int32',
        'isAllIssues' => null,
        'allImport' => null,
        'featureUri' => null,
        'simpleResourceinfoList' => null,
        'invertSimpleResourceinfoList' => null,
        'addToIterator' => null
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
    * iteratorUri  迭代uri
    * type  资源类型, 对应serviceType
    * isAllIssues  是否选择issues
    * allImport  是否选择所有用例
    * featureUri  按照目录引入用例
    * simpleResourceinfoList  选择的资源列表, 对应sourceCaseUris
    * invertSimpleResourceinfoList  反选的资源列表
    * addToIterator  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'iteratorUri' => 'iterator_uri',
            'type' => 'type',
            'isAllIssues' => 'is_all_issues',
            'allImport' => 'all_import',
            'featureUri' => 'feature_uri',
            'simpleResourceinfoList' => 'simple_resourceinfo_list',
            'invertSimpleResourceinfoList' => 'invert_simple_resourceinfo_list',
            'addToIterator' => 'add_to_iterator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目id
    * iteratorUri  迭代uri
    * type  资源类型, 对应serviceType
    * isAllIssues  是否选择issues
    * allImport  是否选择所有用例
    * featureUri  按照目录引入用例
    * simpleResourceinfoList  选择的资源列表, 对应sourceCaseUris
    * invertSimpleResourceinfoList  反选的资源列表
    * addToIterator  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'iteratorUri' => 'setIteratorUri',
            'type' => 'setType',
            'isAllIssues' => 'setIsAllIssues',
            'allImport' => 'setAllImport',
            'featureUri' => 'setFeatureUri',
            'simpleResourceinfoList' => 'setSimpleResourceinfoList',
            'invertSimpleResourceinfoList' => 'setInvertSimpleResourceinfoList',
            'addToIterator' => 'setAddToIterator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目id
    * iteratorUri  迭代uri
    * type  资源类型, 对应serviceType
    * isAllIssues  是否选择issues
    * allImport  是否选择所有用例
    * featureUri  按照目录引入用例
    * simpleResourceinfoList  选择的资源列表, 对应sourceCaseUris
    * invertSimpleResourceinfoList  反选的资源列表
    * addToIterator  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'iteratorUri' => 'getIteratorUri',
            'type' => 'getType',
            'isAllIssues' => 'getIsAllIssues',
            'allImport' => 'getAllImport',
            'featureUri' => 'getFeatureUri',
            'simpleResourceinfoList' => 'getSimpleResourceinfoList',
            'invertSimpleResourceinfoList' => 'getInvertSimpleResourceinfoList',
            'addToIterator' => 'getAddToIterator'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isAllIssues'] = isset($data['isAllIssues']) ? $data['isAllIssues'] : null;
        $this->container['allImport'] = isset($data['allImport']) ? $data['allImport'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['simpleResourceinfoList'] = isset($data['simpleResourceinfoList']) ? $data['simpleResourceinfoList'] : null;
        $this->container['invertSimpleResourceinfoList'] = isset($data['invertSimpleResourceinfoList']) ? $data['invertSimpleResourceinfoList'] : null;
        $this->container['addToIterator'] = isset($data['addToIterator']) ? $data['addToIterator'] : null;
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
    *  迭代uri
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
    * @param string|null $iteratorUri 迭代uri
    *
    * @return $this
    */
    public function setIteratorUri($iteratorUri)
    {
        $this->container['iteratorUri'] = $iteratorUri;
        return $this;
    }

    /**
    * Gets type
    *  资源类型, 对应serviceType
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 资源类型, 对应serviceType
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isAllIssues
    *  是否选择issues
    *
    * @return string|null
    */
    public function getIsAllIssues()
    {
        return $this->container['isAllIssues'];
    }

    /**
    * Sets isAllIssues
    *
    * @param string|null $isAllIssues 是否选择issues
    *
    * @return $this
    */
    public function setIsAllIssues($isAllIssues)
    {
        $this->container['isAllIssues'] = $isAllIssues;
        return $this;
    }

    /**
    * Gets allImport
    *  是否选择所有用例
    *
    * @return bool|null
    */
    public function getAllImport()
    {
        return $this->container['allImport'];
    }

    /**
    * Sets allImport
    *
    * @param bool|null $allImport 是否选择所有用例
    *
    * @return $this
    */
    public function setAllImport($allImport)
    {
        $this->container['allImport'] = $allImport;
        return $this;
    }

    /**
    * Gets featureUri
    *  按照目录引入用例
    *
    * @return string|null
    */
    public function getFeatureUri()
    {
        return $this->container['featureUri'];
    }

    /**
    * Sets featureUri
    *
    * @param string|null $featureUri 按照目录引入用例
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
        return $this;
    }

    /**
    * Gets simpleResourceinfoList
    *  选择的资源列表, 对应sourceCaseUris
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]|null
    */
    public function getSimpleResourceinfoList()
    {
        return $this->container['simpleResourceinfoList'];
    }

    /**
    * Sets simpleResourceinfoList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]|null $simpleResourceinfoList 选择的资源列表, 对应sourceCaseUris
    *
    * @return $this
    */
    public function setSimpleResourceinfoList($simpleResourceinfoList)
    {
        $this->container['simpleResourceinfoList'] = $simpleResourceinfoList;
        return $this;
    }

    /**
    * Gets invertSimpleResourceinfoList
    *  反选的资源列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]|null
    */
    public function getInvertSimpleResourceinfoList()
    {
        return $this->container['invertSimpleResourceinfoList'];
    }

    /**
    * Sets invertSimpleResourceinfoList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\SimpleResourceInfo[]|null $invertSimpleResourceinfoList 反选的资源列表
    *
    * @return $this
    */
    public function setInvertSimpleResourceinfoList($invertSimpleResourceinfoList)
    {
        $this->container['invertSimpleResourceinfoList'] = $invertSimpleResourceinfoList;
        return $this;
    }

    /**
    * Gets addToIterator
    *  是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @return bool|null
    */
    public function getAddToIterator()
    {
        return $this->container['addToIterator'];
    }

    /**
    * Sets addToIterator
    *
    * @param bool|null $addToIterator 是否将需求添加到测试计划（不传或者true添加需求到测试计划，false就不添加）
    *
    * @return $this
    */
    public function setAddToIterator($addToIterator)
    {
        $this->container['addToIterator'] = $addToIterator;
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

