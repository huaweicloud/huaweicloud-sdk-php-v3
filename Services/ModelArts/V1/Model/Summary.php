<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Summary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Summary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logType  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    * logDir  logDir
    * dataSources  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logType' => 'string',
            'logDir' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LogDir',
            'dataSources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataSource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logType  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    * logDir  logDir
    * dataSources  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logType' => null,
        'logDir' => null,
        'dataSources' => null
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
    * logType  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    * logDir  logDir
    * dataSources  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logType' => 'log_type',
            'logDir' => 'log_dir',
            'dataSources' => 'data_sources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logType  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    * logDir  logDir
    * dataSources  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'logType' => 'setLogType',
            'logDir' => 'setLogDir',
            'dataSources' => 'setDataSources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logType  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    * logDir  logDir
    * dataSources  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'logType' => 'getLogType',
            'logDir' => 'getLogDir',
            'dataSources' => 'getDataSources'
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
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logDir'] = isset($data['logDir']) ? $data['logDir'] : null;
        $this->container['dataSources'] = isset($data['dataSources']) ? $data['dataSources'] : null;
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
    * Gets logType
    *  **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType **参数解释**：训练作业可视化日志类型，配置后训练作业可作为可视化作业数据源。 **约束限制**：不涉及。 **取值范围**： - tensorboard：输出TensorBoard可视化工具类型的日志 - mindstudio-insight：输出mindstudio-insight可视化工具类型的日志  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets logDir
    *  logDir
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LogDir|null
    */
    public function getLogDir()
    {
        return $this->container['logDir'];
    }

    /**
    * Sets logDir
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LogDir|null $logDir logDir
    *
    * @return $this
    */
    public function setLogDir($logDir)
    {
        $this->container['logDir'] = $logDir;
        return $this;
    }

    /**
    * Gets dataSources
    *  **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataSource[]|null
    */
    public function getDataSources()
    {
        return $this->container['dataSources'];
    }

    /**
    * Sets dataSources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataSource[]|null $dataSources **参数解释**：可视化作业或训练作业调试模式的可视化日志输入。 **约束限制**：训练作业高级功能开启\"tensorboard/enable\": \"true\"或\"mindstudio-insight/enable\": \"true\"时必填。
    *
    * @return $this
    */
    public function setDataSources($dataSources)
    {
        $this->container['dataSources'] = $dataSources;
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

