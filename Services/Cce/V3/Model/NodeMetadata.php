<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * uid  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    * creationTimestamp  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ownerReference  ownerReference
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'uid' => 'string',
            'annotations' => 'map[string,string]',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string',
            'ownerReference' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeMetadataOwnerReference'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * uid  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    * creationTimestamp  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ownerReference  ownerReference
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'uid' => null,
        'annotations' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null,
        'ownerReference' => null
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
    * name  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * uid  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    * creationTimestamp  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ownerReference  ownerReference
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'uid' => 'uid',
            'annotations' => 'annotations',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp',
            'ownerReference' => 'ownerReference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * uid  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    * creationTimestamp  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ownerReference  ownerReference
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'uid' => 'setUid',
            'annotations' => 'setAnnotations',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp',
            'ownerReference' => 'setOwnerReference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * uid  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    * creationTimestamp  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ownerReference  ownerReference
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'uid' => 'getUid',
            'annotations' => 'getAnnotations',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp',
            'ownerReference' => 'getOwnerReference'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['ownerReference'] = isset($data['ownerReference']) ? $data['ownerReference'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 56)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 56.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uid']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['uid'])) {
                $invalidProperties[] = "invalid value for 'uid', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets name
    *  **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 节点名称 **约束限制**： - 命名规则：以小写字母开头，由小写字母、数字、中划线(-)、点(.)组成，长度范围1-56位，且不能以中划线(-)结尾。 - 若name未指定或指定为空字符串，则按照默认规则生成节点名称。默认规则为：“集群名称-随机字符串”，若集群名称过长，则只取前36个字符。 - 若节点数量(count)大于1时，则按照默认规则会在用户输入的节点名称末尾添加随机字符串。默认规则为：“用户输入名称-随机字符串”，若用户输入的节点名称长度范围超过50位时，系统截取前50位，并在末尾添加随机字符串。  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid **参数解释**： 节点ID，资源唯一标识。 **约束限制**： 创建成功后自动生成，填写无效 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets annotations
    *  **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations **参数解释**： CCE自有节点注解，非Kubernetes原生annotations，格式为key/value键值对。 > Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。  **约束限制**： 仅用于查询，不支持请求时传入，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及  示例： ``` \"annotations\": {   \"key1\" : \"value1\",   \"key2\" : \"value2\" } ```
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp **参数解释**： 节点创建时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp **参数解释**： 节点更新时间。 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets ownerReference
    *  ownerReference
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeMetadataOwnerReference|null
    */
    public function getOwnerReference()
    {
        return $this->container['ownerReference'];
    }

    /**
    * Sets ownerReference
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeMetadataOwnerReference|null $ownerReference ownerReference
    *
    * @return $this
    */
    public function setOwnerReference($ownerReference)
    {
        $this->container['ownerReference'] = $ownerReference;
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

