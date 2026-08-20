<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    * name  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    * description  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    * datastoreVersion  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    * datastoreName  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    * nodeType  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    * haMode  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    * created  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * userDefined  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'datastoreVersion' => 'string',
            'datastoreName' => 'string',
            'nodeType' => 'string',
            'haMode' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'userDefined' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    * name  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    * description  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    * datastoreVersion  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    * datastoreName  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    * nodeType  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    * haMode  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    * created  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * userDefined  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'datastoreVersion' => null,
        'datastoreName' => null,
        'nodeType' => null,
        'haMode' => null,
        'created' => null,
        'updated' => null,
        'userDefined' => null
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
    * id  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    * name  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    * description  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    * datastoreVersion  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    * datastoreName  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    * nodeType  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    * haMode  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    * created  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * userDefined  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'datastoreVersion' => 'datastore_version',
            'datastoreName' => 'datastore_name',
            'nodeType' => 'node_type',
            'haMode' => 'ha_mode',
            'created' => 'created',
            'updated' => 'updated',
            'userDefined' => 'user_defined'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    * name  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    * description  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    * datastoreVersion  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    * datastoreName  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    * nodeType  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    * haMode  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    * created  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * userDefined  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'datastoreVersion' => 'setDatastoreVersion',
            'datastoreName' => 'setDatastoreName',
            'nodeType' => 'setNodeType',
            'haMode' => 'setHaMode',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'userDefined' => 'setUserDefined'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    * name  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    * description  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    * datastoreVersion  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    * datastoreName  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    * nodeType  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    * haMode  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    * created  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * updated  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    * userDefined  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'datastoreVersion' => 'getDatastoreVersion',
            'datastoreName' => 'getDatastoreName',
            'nodeType' => 'getNodeType',
            'haMode' => 'getHaMode',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'userDefined' => 'getUserDefined'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['datastoreName'] = isset($data['datastoreName']) ? $data['datastoreName'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['datastoreVersion'] === null) {
            $invalidProperties[] = "'datastoreVersion' can't be null";
        }
        if ($this->container['datastoreName'] === null) {
            $invalidProperties[] = "'datastoreName' can't be null";
        }
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
        if ($this->container['haMode'] === null) {
            $invalidProperties[] = "'haMode' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['userDefined'] === null) {
            $invalidProperties[] = "'userDefined' can't be null";
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
    * Gets id
    *  **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**: 参数模板ID。参数模板的唯一标识。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。
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
    *  **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**: 参数模板名称。 **取值范围**: 参数模板名称在1到64个字符之间，区分大小写，可包含字母、数字、英文中划线、下划线或句点，不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**: 参数模板描述。 **取值范围**: 描述不能超过256个字符，且不能包含回车和 ! < \" = ' > &这些特殊字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string $datastoreVersion **参数解释**: 引擎版本。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets datastoreName
    *  **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    *
    * @return string
    */
    public function getDatastoreName()
    {
        return $this->container['datastoreName'];
    }

    /**
    * Sets datastoreName
    *
    * @param string $datastoreName **参数解释**: 引擎名称。 **取值范围**: GaussDB。
    *
    * @return $this
    */
    public function setDatastoreName($datastoreName)
    {
        $this->container['datastoreName'] = $datastoreName;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    *
    * @return string
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string $nodeType **参数解释**: 节点类型。 **取值范围**: - independent：独立部署。 - ha：集中式。 - combined：混合部署。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets haMode
    *  **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    *
    * @return string
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string $haMode **参数解释**: 实例类型。 **取值范围**: - Enterprise：分布式实例（企业版）。 - centralization_standard：集中式版实例。  区分大小写。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created **参数解释**: 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated **参数解释**: 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。例如：2024-07-03T14:18:55。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets userDefined
    *  **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @return bool
    */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
    * Sets userDefined
    *
    * @param bool $userDefined **参数解释**: 是否是用户自定义参数模板。 **取值范围**: - false：表示为系统默认参数模板。 - true：表示为用户自定义参数模板。
    *
    * @return $this
    */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;
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

