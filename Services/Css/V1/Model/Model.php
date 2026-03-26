<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Model implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Model';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 模型id **取值范围**： 不涉及
    * name  **参数解释**： 模型名字 **取值范围**： 不涉及
    * datastoreType  **参数解释**： 模型类型 **取值范围**： 不涉及
    * datastoreVersion  **参数解释**： 模型版本 **取值范围**： 不涉及
    * isTextModel  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    * modelVersionId  **参数解释**： 模型版本id **取值范围**： 不涉及
    * desc  **参数解释**： 模型描述 **取值范围**： 不涉及
    * language  **参数解释**： 模型语言 **取值范围**： 不涉及
    * archType  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'datastoreType' => 'string',
            'datastoreVersion' => 'string',
            'isTextModel' => 'string',
            'modelVersionId' => 'string',
            'desc' => 'string',
            'language' => 'string',
            'archType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 模型id **取值范围**： 不涉及
    * name  **参数解释**： 模型名字 **取值范围**： 不涉及
    * datastoreType  **参数解释**： 模型类型 **取值范围**： 不涉及
    * datastoreVersion  **参数解释**： 模型版本 **取值范围**： 不涉及
    * isTextModel  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    * modelVersionId  **参数解释**： 模型版本id **取值范围**： 不涉及
    * desc  **参数解释**： 模型描述 **取值范围**： 不涉及
    * language  **参数解释**： 模型语言 **取值范围**： 不涉及
    * archType  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'datastoreType' => null,
        'datastoreVersion' => null,
        'isTextModel' => null,
        'modelVersionId' => null,
        'desc' => null,
        'language' => null,
        'archType' => null
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
    * id  **参数解释**： 模型id **取值范围**： 不涉及
    * name  **参数解释**： 模型名字 **取值范围**： 不涉及
    * datastoreType  **参数解释**： 模型类型 **取值范围**： 不涉及
    * datastoreVersion  **参数解释**： 模型版本 **取值范围**： 不涉及
    * isTextModel  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    * modelVersionId  **参数解释**： 模型版本id **取值范围**： 不涉及
    * desc  **参数解释**： 模型描述 **取值范围**： 不涉及
    * language  **参数解释**： 模型语言 **取值范围**： 不涉及
    * archType  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'datastoreType' => 'datastore_type',
            'datastoreVersion' => 'datastore_version',
            'isTextModel' => 'is_text_model',
            'modelVersionId' => 'model_version_id',
            'desc' => 'desc',
            'language' => 'language',
            'archType' => 'arch_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 模型id **取值范围**： 不涉及
    * name  **参数解释**： 模型名字 **取值范围**： 不涉及
    * datastoreType  **参数解释**： 模型类型 **取值范围**： 不涉及
    * datastoreVersion  **参数解释**： 模型版本 **取值范围**： 不涉及
    * isTextModel  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    * modelVersionId  **参数解释**： 模型版本id **取值范围**： 不涉及
    * desc  **参数解释**： 模型描述 **取值范围**： 不涉及
    * language  **参数解释**： 模型语言 **取值范围**： 不涉及
    * archType  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'datastoreType' => 'setDatastoreType',
            'datastoreVersion' => 'setDatastoreVersion',
            'isTextModel' => 'setIsTextModel',
            'modelVersionId' => 'setModelVersionId',
            'desc' => 'setDesc',
            'language' => 'setLanguage',
            'archType' => 'setArchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 模型id **取值范围**： 不涉及
    * name  **参数解释**： 模型名字 **取值范围**： 不涉及
    * datastoreType  **参数解释**： 模型类型 **取值范围**： 不涉及
    * datastoreVersion  **参数解释**： 模型版本 **取值范围**： 不涉及
    * isTextModel  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    * modelVersionId  **参数解释**： 模型版本id **取值范围**： 不涉及
    * desc  **参数解释**： 模型描述 **取值范围**： 不涉及
    * language  **参数解释**： 模型语言 **取值范围**： 不涉及
    * archType  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'datastoreType' => 'getDatastoreType',
            'datastoreVersion' => 'getDatastoreVersion',
            'isTextModel' => 'getIsTextModel',
            'modelVersionId' => 'getModelVersionId',
            'desc' => 'getDesc',
            'language' => 'getLanguage',
            'archType' => 'getArchType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['isTextModel'] = isset($data['isTextModel']) ? $data['isTextModel'] : null;
        $this->container['modelVersionId'] = isset($data['modelVersionId']) ? $data['modelVersionId'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['archType'] = isset($data['archType']) ? $data['archType'] : null;
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
    * Gets id
    *  **参数解释**： 模型id **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 模型id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 模型名字 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 模型名字 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets datastoreType
    *  **参数解释**： 模型类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType **参数解释**： 模型类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  **参数解释**： 模型版本 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion **参数解释**： 模型版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets isTextModel
    *  **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getIsTextModel()
    {
        return $this->container['isTextModel'];
    }

    /**
    * Sets isTextModel
    *
    * @param string|null $isTextModel **参数解释**： 是否是文本模型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIsTextModel($isTextModel)
    {
        $this->container['isTextModel'] = $isTextModel;
        return $this;
    }

    /**
    * Gets modelVersionId
    *  **参数解释**： 模型版本id **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getModelVersionId()
    {
        return $this->container['modelVersionId'];
    }

    /**
    * Sets modelVersionId
    *
    * @param string|null $modelVersionId **参数解释**： 模型版本id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setModelVersionId($modelVersionId)
    {
        $this->container['modelVersionId'] = $modelVersionId;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 模型描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 模型描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释**： 模型语言 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释**： 模型语言 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets archType
    *  **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getArchType()
    {
        return $this->container['archType'];
    }

    /**
    * Sets archType
    *
    * @param string|null $archType **参数解释**： 模型规格 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setArchType($archType)
    {
        $this->container['archType'] = $archType;
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

