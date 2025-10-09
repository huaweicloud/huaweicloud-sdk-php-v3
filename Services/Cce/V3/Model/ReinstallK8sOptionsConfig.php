<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallK8sOptionsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallK8sOptionsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * labels  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    * maxPods  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'labels' => 'map[string,string]',
            'taints' => '\HuaweiCloud\SDK\Cce\V3\Model\Taint[]',
            'maxPods' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * labels  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    * maxPods  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'labels' => null,
        'taints' => null,
        'maxPods' => 'int32'
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
    * labels  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    * maxPods  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'labels' => 'labels',
            'taints' => 'taints',
            'maxPods' => 'maxPods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * labels  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    * maxPods  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'labels' => 'setLabels',
            'taints' => 'setTaints',
            'maxPods' => 'setMaxPods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * labels  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    * taints  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    * maxPods  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'labels' => 'getLabels',
            'taints' => 'getTaints',
            'maxPods' => 'getMaxPods'
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['maxPods'] = isset($data['maxPods']) ? $data['maxPods'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxPods']) && ($this->container['maxPods'] > 256)) {
                $invalidProperties[] = "invalid value for 'maxPods', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['maxPods']) && ($this->container['maxPods'] < 16)) {
                $invalidProperties[] = "invalid value for 'maxPods', must be bigger than or equal to 16.";
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
    * Gets labels
    *  **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels **参数解释**: 格式为key/value键值对。 - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。  示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**: 键值对个数不超过20条。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets taints
    *  支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Taint[]|null
    */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
    * Sets taints
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Taint[]|null $taints 支持给创建出来的节点加Taints来设置反亲和性，taints配置不超过20条。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets maxPods
    *  **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getMaxPods()
    {
        return $this->container['maxPods'];
    }

    /**
    * Sets maxPods
    *
    * @param int|null $maxPods **参数解释**: 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。 **约束限制**: 不涉及 **取值范围**: 取值范围为16~256  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMaxPods($maxPods)
    {
        $this->container['maxPods'] = $maxPods;
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

