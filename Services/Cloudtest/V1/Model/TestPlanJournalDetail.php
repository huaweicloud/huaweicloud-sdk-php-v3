<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanJournalDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanJournalDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updated  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    * added  测试计划资源的添加记录（工作项或者测试用例）
    * deleted  测试计划资源的移除记录（工作项或者测试用例）
    * journalizedType  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    * type  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updated' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AttributeChange[]',
            'added' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]',
            'deleted' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]',
            'journalizedType' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updated  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    * added  测试计划资源的添加记录（工作项或者测试用例）
    * deleted  测试计划资源的移除记录（工作项或者测试用例）
    * journalizedType  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    * type  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updated' => null,
        'added' => null,
        'deleted' => null,
        'journalizedType' => null,
        'type' => null
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
    * updated  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    * added  测试计划资源的添加记录（工作项或者测试用例）
    * deleted  测试计划资源的移除记录（工作项或者测试用例）
    * journalizedType  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    * type  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updated' => 'updated',
            'added' => 'added',
            'deleted' => 'deleted',
            'journalizedType' => 'journalized_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updated  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    * added  测试计划资源的添加记录（工作项或者测试用例）
    * deleted  测试计划资源的移除记录（工作项或者测试用例）
    * journalizedType  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    * type  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @var string[]
    */
    protected static $setters = [
            'updated' => 'setUpdated',
            'added' => 'setAdded',
            'deleted' => 'setDeleted',
            'journalizedType' => 'setJournalizedType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updated  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    * added  测试计划资源的添加记录（工作项或者测试用例）
    * deleted  测试计划资源的移除记录（工作项或者测试用例）
    * journalizedType  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    * type  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @var string[]
    */
    protected static $getters = [
            'updated' => 'getUpdated',
            'added' => 'getAdded',
            'deleted' => 'getDeleted',
            'journalizedType' => 'getJournalizedType',
            'type' => 'getType'
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
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['journalizedType'] = isset($data['journalizedType']) ? $data['journalizedType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets updated
    *  测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AttributeChange[]|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AttributeChange[]|null $updated 测试计划基础信息变更，包括计划名称，测试类型，计划处理者、版本号、关联迭代、开始日期、截至日期、描述
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets added
    *  测试计划资源的添加记录（工作项或者测试用例）
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]|null
    */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
    * Sets added
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]|null $added 测试计划资源的添加记录（工作项或者测试用例）
    *
    * @return $this
    */
    public function setAdded($added)
    {
        $this->container['added'] = $added;
        return $this;
    }

    /**
    * Gets deleted
    *  测试计划资源的移除记录（工作项或者测试用例）
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId[]|null $deleted 测试计划资源的移除记录（工作项或者测试用例）
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets journalizedType
    *  表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    *
    * @return string|null
    */
    public function getJournalizedType()
    {
        return $this->container['journalizedType'];
    }

    /**
    * Sets journalizedType
    *
    * @param string|null $journalizedType 表明该条变更记录的具体变更类型，例如测试用例（testCase），需求（issue）
    *
    * @return $this
    */
    public function setJournalizedType($journalizedType)
    {
        $this->container['journalizedType'] = $journalizedType;
        return $this;
    }

    /**
    * Gets type
    *  表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 表明该条变更记录属于基础信息变更还是资源（需求添加移除、用例添加移除）变更
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

