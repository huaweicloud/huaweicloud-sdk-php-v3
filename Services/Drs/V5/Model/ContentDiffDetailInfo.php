<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContentDiffDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContentDiffDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  数量。
    * targetMetaIsNull  对比不一致详情：只有源库存在。
    * sourceMetaIsNull  对比不一致详情：只有目标库存在。
    * sourceTargetMetaNotNull  对比不一致详情：源和目标端均存在。
    * contentsInfos  信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'targetMetaIsNull' => 'int',
            'sourceMetaIsNull' => 'int',
            'sourceTargetMetaNotNull' => 'int',
            'contentsInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\ContentDiffDetailVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  数量。
    * targetMetaIsNull  对比不一致详情：只有源库存在。
    * sourceMetaIsNull  对比不一致详情：只有目标库存在。
    * sourceTargetMetaNotNull  对比不一致详情：源和目标端均存在。
    * contentsInfos  信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'targetMetaIsNull' => 'int64',
        'sourceMetaIsNull' => 'int64',
        'sourceTargetMetaNotNull' => 'int64',
        'contentsInfos' => null
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
    * count  数量。
    * targetMetaIsNull  对比不一致详情：只有源库存在。
    * sourceMetaIsNull  对比不一致详情：只有目标库存在。
    * sourceTargetMetaNotNull  对比不一致详情：源和目标端均存在。
    * contentsInfos  信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'targetMetaIsNull' => 'target_meta_is_null',
            'sourceMetaIsNull' => 'source_meta_is_null',
            'sourceTargetMetaNotNull' => 'source_target_meta_not_null',
            'contentsInfos' => 'contents_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  数量。
    * targetMetaIsNull  对比不一致详情：只有源库存在。
    * sourceMetaIsNull  对比不一致详情：只有目标库存在。
    * sourceTargetMetaNotNull  对比不一致详情：源和目标端均存在。
    * contentsInfos  信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'targetMetaIsNull' => 'setTargetMetaIsNull',
            'sourceMetaIsNull' => 'setSourceMetaIsNull',
            'sourceTargetMetaNotNull' => 'setSourceTargetMetaNotNull',
            'contentsInfos' => 'setContentsInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  数量。
    * targetMetaIsNull  对比不一致详情：只有源库存在。
    * sourceMetaIsNull  对比不一致详情：只有目标库存在。
    * sourceTargetMetaNotNull  对比不一致详情：源和目标端均存在。
    * contentsInfos  信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'targetMetaIsNull' => 'getTargetMetaIsNull',
            'sourceMetaIsNull' => 'getSourceMetaIsNull',
            'sourceTargetMetaNotNull' => 'getSourceTargetMetaNotNull',
            'contentsInfos' => 'getContentsInfos'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['targetMetaIsNull'] = isset($data['targetMetaIsNull']) ? $data['targetMetaIsNull'] : null;
        $this->container['sourceMetaIsNull'] = isset($data['sourceMetaIsNull']) ? $data['sourceMetaIsNull'] : null;
        $this->container['sourceTargetMetaNotNull'] = isset($data['sourceTargetMetaNotNull']) ? $data['sourceTargetMetaNotNull'] : null;
        $this->container['contentsInfos'] = isset($data['contentsInfos']) ? $data['contentsInfos'] : null;
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
    * Gets count
    *  数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets targetMetaIsNull
    *  对比不一致详情：只有源库存在。
    *
    * @return int|null
    */
    public function getTargetMetaIsNull()
    {
        return $this->container['targetMetaIsNull'];
    }

    /**
    * Sets targetMetaIsNull
    *
    * @param int|null $targetMetaIsNull 对比不一致详情：只有源库存在。
    *
    * @return $this
    */
    public function setTargetMetaIsNull($targetMetaIsNull)
    {
        $this->container['targetMetaIsNull'] = $targetMetaIsNull;
        return $this;
    }

    /**
    * Gets sourceMetaIsNull
    *  对比不一致详情：只有目标库存在。
    *
    * @return int|null
    */
    public function getSourceMetaIsNull()
    {
        return $this->container['sourceMetaIsNull'];
    }

    /**
    * Sets sourceMetaIsNull
    *
    * @param int|null $sourceMetaIsNull 对比不一致详情：只有目标库存在。
    *
    * @return $this
    */
    public function setSourceMetaIsNull($sourceMetaIsNull)
    {
        $this->container['sourceMetaIsNull'] = $sourceMetaIsNull;
        return $this;
    }

    /**
    * Gets sourceTargetMetaNotNull
    *  对比不一致详情：源和目标端均存在。
    *
    * @return int|null
    */
    public function getSourceTargetMetaNotNull()
    {
        return $this->container['sourceTargetMetaNotNull'];
    }

    /**
    * Sets sourceTargetMetaNotNull
    *
    * @param int|null $sourceTargetMetaNotNull 对比不一致详情：源和目标端均存在。
    *
    * @return $this
    */
    public function setSourceTargetMetaNotNull($sourceTargetMetaNotNull)
    {
        $this->container['sourceTargetMetaNotNull'] = $sourceTargetMetaNotNull;
        return $this;
    }

    /**
    * Gets contentsInfos
    *  信息列表。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ContentDiffDetailVO[]|null
    */
    public function getContentsInfos()
    {
        return $this->container['contentsInfos'];
    }

    /**
    * Sets contentsInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ContentDiffDetailVO[]|null $contentsInfos 信息列表。
    *
    * @return $this
    */
    public function setContentsInfos($contentsInfos)
    {
        $this->container['contentsInfos'] = $contentsInfos;
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

