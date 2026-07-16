<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDevServerJobTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDevServerJobTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：模板id。 **取值范围**：不涉及。
    * name  **参数解释**：模板名称。 **取值范围**：不涉及。
    * description  **参数解释**：模板描述。 **取值范围**：不涉及。
    * cmd  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    * swrPath  **参数解释**：任务镜像。 **取值范围**：不涉及。
    * resources  **参数解释**：任务规格。 **取值范围**：不涉及。
    * volumes  **参数解释**：卷。 **取值范围**：不涉及。
    * volumesMount  **参数解释**：卷挂载。 **取值范围**：不涉及。
    * flavorType  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    * timeout  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    * checkInterval  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    * type  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    * status  **参数解释**：模板状态。 **取值范围**：ACTIVE。
    * params  **参数解释**：模板的其他参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'cmd' => 'string',
            'swrPath' => 'string',
            'resources' => 'string',
            'volumes' => 'string',
            'volumesMount' => 'string',
            'flavorType' => 'string',
            'timeout' => 'string',
            'checkInterval' => 'string',
            'type' => 'string',
            'status' => 'string',
            'params' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TemplateParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：模板id。 **取值范围**：不涉及。
    * name  **参数解释**：模板名称。 **取值范围**：不涉及。
    * description  **参数解释**：模板描述。 **取值范围**：不涉及。
    * cmd  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    * swrPath  **参数解释**：任务镜像。 **取值范围**：不涉及。
    * resources  **参数解释**：任务规格。 **取值范围**：不涉及。
    * volumes  **参数解释**：卷。 **取值范围**：不涉及。
    * volumesMount  **参数解释**：卷挂载。 **取值范围**：不涉及。
    * flavorType  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    * timeout  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    * checkInterval  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    * type  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    * status  **参数解释**：模板状态。 **取值范围**：ACTIVE。
    * params  **参数解释**：模板的其他参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'cmd' => null,
        'swrPath' => null,
        'resources' => null,
        'volumes' => null,
        'volumesMount' => null,
        'flavorType' => null,
        'timeout' => null,
        'checkInterval' => null,
        'type' => null,
        'status' => null,
        'params' => null
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
    * id  **参数解释**：模板id。 **取值范围**：不涉及。
    * name  **参数解释**：模板名称。 **取值范围**：不涉及。
    * description  **参数解释**：模板描述。 **取值范围**：不涉及。
    * cmd  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    * swrPath  **参数解释**：任务镜像。 **取值范围**：不涉及。
    * resources  **参数解释**：任务规格。 **取值范围**：不涉及。
    * volumes  **参数解释**：卷。 **取值范围**：不涉及。
    * volumesMount  **参数解释**：卷挂载。 **取值范围**：不涉及。
    * flavorType  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    * timeout  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    * checkInterval  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    * type  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    * status  **参数解释**：模板状态。 **取值范围**：ACTIVE。
    * params  **参数解释**：模板的其他参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'cmd' => 'cmd',
            'swrPath' => 'swr_path',
            'resources' => 'resources',
            'volumes' => 'volumes',
            'volumesMount' => 'volumes_mount',
            'flavorType' => 'flavor_type',
            'timeout' => 'timeout',
            'checkInterval' => 'check_interval',
            'type' => 'type',
            'status' => 'status',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：模板id。 **取值范围**：不涉及。
    * name  **参数解释**：模板名称。 **取值范围**：不涉及。
    * description  **参数解释**：模板描述。 **取值范围**：不涉及。
    * cmd  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    * swrPath  **参数解释**：任务镜像。 **取值范围**：不涉及。
    * resources  **参数解释**：任务规格。 **取值范围**：不涉及。
    * volumes  **参数解释**：卷。 **取值范围**：不涉及。
    * volumesMount  **参数解释**：卷挂载。 **取值范围**：不涉及。
    * flavorType  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    * timeout  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    * checkInterval  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    * type  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    * status  **参数解释**：模板状态。 **取值范围**：ACTIVE。
    * params  **参数解释**：模板的其他参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'cmd' => 'setCmd',
            'swrPath' => 'setSwrPath',
            'resources' => 'setResources',
            'volumes' => 'setVolumes',
            'volumesMount' => 'setVolumesMount',
            'flavorType' => 'setFlavorType',
            'timeout' => 'setTimeout',
            'checkInterval' => 'setCheckInterval',
            'type' => 'setType',
            'status' => 'setStatus',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：模板id。 **取值范围**：不涉及。
    * name  **参数解释**：模板名称。 **取值范围**：不涉及。
    * description  **参数解释**：模板描述。 **取值范围**：不涉及。
    * cmd  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    * swrPath  **参数解释**：任务镜像。 **取值范围**：不涉及。
    * resources  **参数解释**：任务规格。 **取值范围**：不涉及。
    * volumes  **参数解释**：卷。 **取值范围**：不涉及。
    * volumesMount  **参数解释**：卷挂载。 **取值范围**：不涉及。
    * flavorType  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    * timeout  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    * checkInterval  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    * type  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    * status  **参数解释**：模板状态。 **取值范围**：ACTIVE。
    * params  **参数解释**：模板的其他参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'cmd' => 'getCmd',
            'swrPath' => 'getSwrPath',
            'resources' => 'getResources',
            'volumes' => 'getVolumes',
            'volumesMount' => 'getVolumesMount',
            'flavorType' => 'getFlavorType',
            'timeout' => 'getTimeout',
            'checkInterval' => 'getCheckInterval',
            'type' => 'getType',
            'status' => 'getStatus',
            'params' => 'getParams'
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
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['swrPath'] = isset($data['swrPath']) ? $data['swrPath'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['volumesMount'] = isset($data['volumesMount']) ? $data['volumesMount'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['checkInterval'] = isset($data['checkInterval']) ? $data['checkInterval'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
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
    *  **参数解释**：模板id。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：模板id。 **取值范围**：不涉及。
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
    *  **参数解释**：模板名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：模板名称。 **取值范围**：不涉及。
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
    *  **参数解释**：模板描述。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：模板描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cmd
    *  **参数解释**：容器启动命令。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd **参数解释**：容器启动命令。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets swrPath
    *  **参数解释**：任务镜像。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSwrPath()
    {
        return $this->container['swrPath'];
    }

    /**
    * Sets swrPath
    *
    * @param string|null $swrPath **参数解释**：任务镜像。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSwrPath($swrPath)
    {
        $this->container['swrPath'] = $swrPath;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释**：任务规格。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string|null $resources **参数解释**：任务规格。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets volumes
    *  **参数解释**：卷。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param string|null $volumes **参数解释**：卷。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets volumesMount
    *  **参数解释**：卷挂载。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVolumesMount()
    {
        return $this->container['volumesMount'];
    }

    /**
    * Sets volumesMount
    *
    * @param string|null $volumesMount **参数解释**：卷挂载。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVolumesMount($volumesMount)
    {
        $this->container['volumesMount'] = $volumesMount;
        return $this;
    }

    /**
    * Gets flavorType
    *  **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType **参数解释**：规格类型。 **取值范围**：-ASCEND_SNT9B   -ASCEND_SNT9C   -ASCEND_GENERIC。
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets timeout
    *  **参数解释**：任务超时时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param string|null $timeout **参数解释**：任务超时时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets checkInterval
    *  **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCheckInterval()
    {
        return $this->container['checkInterval'];
    }

    /**
    * Sets checkInterval
    *
    * @param string|null $checkInterval **参数解释**：任务的轮询周期。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCheckInterval($checkInterval)
    {
        $this->container['checkInterval'] = $checkInterval;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
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
    * @param string|null $type **参数解释**：任务类型。 **取值范围**：-LOG_COLLECT  -COMMON 等
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：模板状态。 **取值范围**：ACTIVE。
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
    * @param string|null $status **参数解释**：模板状态。 **取值范围**：ACTIVE。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets params
    *  **参数解释**：模板的其他参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TemplateParam[]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TemplateParam[]|null $params **参数解释**：模板的其他参数。
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

