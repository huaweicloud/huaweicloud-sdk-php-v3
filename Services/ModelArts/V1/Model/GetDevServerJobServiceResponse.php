<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDevServerJobServiceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDevServerJobServiceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：部署服务的id。 **取值范围**：不涉及。
    * name  **参数解释**：部署服务名称。 **取值范围**：不涉及。
    * status  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    * spec  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    * instances  **参数解释**：部署服务实例。
    * model  model
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'spec' => 'map[string,string]',
            'instances' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AIServiceInstance[]',
            'model' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Model'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：部署服务的id。 **取值范围**：不涉及。
    * name  **参数解释**：部署服务名称。 **取值范围**：不涉及。
    * status  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    * spec  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    * instances  **参数解释**：部署服务实例。
    * model  model
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'spec' => null,
        'instances' => null,
        'model' => null
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
    * id  **参数解释**：部署服务的id。 **取值范围**：不涉及。
    * name  **参数解释**：部署服务名称。 **取值范围**：不涉及。
    * status  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    * spec  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    * instances  **参数解释**：部署服务实例。
    * model  model
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'spec' => 'spec',
            'instances' => 'instances',
            'model' => 'model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：部署服务的id。 **取值范围**：不涉及。
    * name  **参数解释**：部署服务名称。 **取值范围**：不涉及。
    * status  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    * spec  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    * instances  **参数解释**：部署服务实例。
    * model  model
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'spec' => 'setSpec',
            'instances' => 'setInstances',
            'model' => 'setModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：部署服务的id。 **取值范围**：不涉及。
    * name  **参数解释**：部署服务名称。 **取值范围**：不涉及。
    * status  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    * spec  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    * instances  **参数解释**：部署服务实例。
    * model  model
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'spec' => 'getSpec',
            'instances' => 'getInstances',
            'model' => 'getModel'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
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
    *  **参数解释**：部署服务的id。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：部署服务的id。 **取值范围**：不涉及。
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
    *  **参数解释**：部署服务名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：部署服务名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：部署实例状态。 **取值范围**：- CREATING  - RUNNING  - FAILED  -DELETED  - ERROR。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets spec
    *  **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    *
    * @return map[string,string]|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param map[string,string]|null $spec **参数解释**：部署服务特性参数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释**：部署服务实例。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AIServiceInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AIServiceInstance[]|null $instances **参数解释**：部署服务实例。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Model|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Model|null $model model
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
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

