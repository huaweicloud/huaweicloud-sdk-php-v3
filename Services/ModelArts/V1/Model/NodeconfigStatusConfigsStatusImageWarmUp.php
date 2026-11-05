<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeconfigStatusConfigsStatusImageWarmUp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeconfigStatus_configsStatus_image_warm_up';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    * message  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    * message  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'message' => null
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
    * state  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    * message  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    * message  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    * message  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'message' => 'getMessage'
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
    const STATE_SUCCESS = 'Success';
    const STATE_FAILED = 'Failed';
    const STATE_PULLING = 'Pulling';
    const STATE_PARTIAL_COMPLETION = 'PartialCompletion';
    const STATE_UNKNOWN = 'Unknown';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_SUCCESS,
            self::STATE_FAILED,
            self::STATE_PULLING,
            self::STATE_PARTIAL_COMPLETION,
            self::STATE_UNKNOWN,
        ];
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets state
    *  **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**：镜像预热任务的整体状态。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Success：全部成功，所有镜像在所有节点上均预热成功。 - Failed：全部失败，所有镜像在所有节点上均预热失败。 - Pulling：预热中，镜像正在被拉取。 - PartialCompletion：部分完成，部分镜像成功、部分失败或部分节点成功。 - Unknown：未知状态，解析节点上报数据异常。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：镜像预热任务的详细结果信息（JSON格式字符串），包含以下字段： - successfulImages：预热成功的镜像列表 - failedImages：预热失败的镜像列表 - partialSuccess：部分节点成功的镜像列表 - pendingImages：尚未完成预热的镜像列表 - additionalInfos：失败原因等附加信息（如镜像不存在、拉取超时、拉取失败、镜像仓库中manifest不存在） - successfulImagesConfig：成功镜像的配置详情（id、name、creationTimestamp、type、image） - failedImagesConfig：失败镜像的配置详情 - partialSuccessConfig：部分成功镜像的配置详情 - pendingImagesConfig：待预热镜像的配置详情 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

