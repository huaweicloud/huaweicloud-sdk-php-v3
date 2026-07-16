<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteInferDeploymentInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteInferDeploymentInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * force  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    * operation  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deploymentName' => 'string',
            'name' => 'string',
            'force' => 'bool',
            'operation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * force  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    * operation  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'deploymentName' => null,
        'name' => null,
        'force' => null,
        'operation' => null
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
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * force  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    * operation  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deploymentName' => 'deployment_name',
            'name' => 'name',
            'force' => 'force',
            'operation' => 'operation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * force  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    * operation  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deploymentName' => 'setDeploymentName',
            'name' => 'setName',
            'force' => 'setForce',
            'operation' => 'setOperation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * force  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    * operation  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deploymentName' => 'getDeploymentName',
            'name' => 'getName',
            'force' => 'getForce',
            'operation' => 'getOperation'
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
        $this->container['deploymentName'] = isset($data['deploymentName']) ? $data['deploymentName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
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
        if ($this->container['deploymentName'] === null) {
            $invalidProperties[] = "'deploymentName' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
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
    * @param string $id **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets deploymentName
    *  **参数解释：** 部署名称。
    *
    * @return string
    */
    public function getDeploymentName()
    {
        return $this->container['deploymentName'];
    }

    /**
    * Sets deploymentName
    *
    * @param string $deploymentName **参数解释：** 部署名称。
    *
    * @return $this
    */
    public function setDeploymentName($deploymentName)
    {
        $this->container['deploymentName'] = $deploymentName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets force
    *  **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
    * Sets force
    *
    * @param bool|null $force **参数解释：** 是否强制删除。 **约束限制：** 不涉及。 **取值范围：** - true：强制删除。 - false：不强制删除。 **默认取值：** false。
    *
    * @return $this
    */
    public function setForce($force)
    {
        $this->container['force'] = $force;
        return $this;
    }

    /**
    * Gets operation
    *  **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation **参数解释：** 删除操作类型。 **约束限制：** 枚举值。 **取值范围：** - DELETE：直接删除，释放资源。 - RECREATE：删除后重建。 **默认取值：** RECREATE。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
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

