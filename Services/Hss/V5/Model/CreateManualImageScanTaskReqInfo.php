<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateManualImageScanTaskReqInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateManualImageScanTaskReqInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    * rateLimit  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    * isAll  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  待扫描镜像
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanScope' => 'int',
            'rateLimit' => 'int',
            'isAll' => 'bool',
            'queryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoQueryInfo',
            'imageInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoImageInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    * rateLimit  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    * isAll  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  待扫描镜像
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanScope' => 'int32',
        'rateLimit' => 'int32',
        'isAll' => null,
        'queryInfo' => null,
        'imageInfo' => null
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
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    * rateLimit  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    * isAll  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  待扫描镜像
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanScope' => 'scan_scope',
            'rateLimit' => 'rate_limit',
            'isAll' => 'is_all',
            'queryInfo' => 'query_info',
            'imageInfo' => 'image_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    * rateLimit  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    * isAll  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  待扫描镜像
    *
    * @var string[]
    */
    protected static $setters = [
            'scanScope' => 'setScanScope',
            'rateLimit' => 'setRateLimit',
            'isAll' => 'setIsAll',
            'queryInfo' => 'setQueryInfo',
            'imageInfo' => 'setImageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanScope  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    * rateLimit  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    * isAll  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    * queryInfo  queryInfo
    * imageInfo  待扫描镜像
    *
    * @var string[]
    */
    protected static $getters = [
            'scanScope' => 'getScanScope',
            'rateLimit' => 'getRateLimit',
            'isAll' => 'getIsAll',
            'queryInfo' => 'getQueryInfo',
            'imageInfo' => 'getImageInfo'
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
        $this->container['scanScope'] = isset($data['scanScope']) ? $data['scanScope'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['isAll'] = isset($data['isAll']) ? $data['isAll'] : null;
        $this->container['queryInfo'] = isset($data['queryInfo']) ? $data['queryInfo'] : null;
        $this->container['imageInfo'] = isset($data['imageInfo']) ? $data['imageInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be bigger than or equal to 0.";
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
    * Gets scanScope
    *  **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getScanScope()
    {
        return $this->container['scanScope'];
    }

    /**
    * Sets scanScope
    *
    * @param int|null $scanScope **参数解释**: 扫描风险类型 **约束限制**: 不涉及 **取值范围**: - 0：none。 - 0x7fffffff：全部。 - 0x000f0000：漏洞。 - 0x0000f000：基线检查。 - 0x00000f00：恶意文件。 - 0x000000f0：敏感信息。 - 0x0000000f：软件合规。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanScope($scanScope)
    {
        $this->container['scanScope'] = $scanScope;
        return $this;
    }

    /**
    * Gets rateLimit
    *  **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param int|null $rateLimit **参数解释**: 扫描限速 单位：个/h **约束限制**: 不涉及 **取值范围**: 0-1000，0表示不限制。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets isAll
    *  **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getIsAll()
    {
        return $this->container['isAll'];
    }

    /**
    * Sets isAll
    *
    * @param bool|null $isAll **参数解释**: 扫描全部镜像 **约束限制**: 不涉及 **取值范围**: - true：扫描全部镜像。 - false：指定镜像扫描,见image_info字段。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIsAll($isAll)
    {
        $this->container['isAll'] = $isAll;
        return $this;
    }

    /**
    * Gets queryInfo
    *  queryInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoQueryInfo|null
    */
    public function getQueryInfo()
    {
        return $this->container['queryInfo'];
    }

    /**
    * Sets queryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoQueryInfo|null $queryInfo queryInfo
    *
    * @return $this
    */
    public function setQueryInfo($queryInfo)
    {
        $this->container['queryInfo'] = $queryInfo;
        return $this;
    }

    /**
    * Gets imageInfo
    *  待扫描镜像
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoImageInfo[]|null
    */
    public function getImageInfo()
    {
        return $this->container['imageInfo'];
    }

    /**
    * Sets imageInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateManualImageScanTaskReqInfoImageInfo[]|null $imageInfo 待扫描镜像
    *
    * @return $this
    */
    public function setImageInfo($imageInfo)
    {
        $this->container['imageInfo'] = $imageInfo;
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

