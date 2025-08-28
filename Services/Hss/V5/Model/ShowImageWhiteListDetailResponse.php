<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageWhiteListDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageWhiteListDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    * vulId  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulName  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulType  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    * cves  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    * ruleType  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    * queryInfo  queryInfo
    * imageInfo  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    * description  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'vulType' => 'string',
            'cves' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoCves[]',
            'ruleType' => 'string',
            'queryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoQueryInfo',
            'imageInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoImageInfo[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    * vulId  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulName  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulType  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    * cves  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    * ruleType  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    * queryInfo  queryInfo
    * imageInfo  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    * description  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vulId' => null,
        'vulName' => null,
        'vulType' => null,
        'cves' => null,
        'ruleType' => null,
        'queryInfo' => null,
        'imageInfo' => null,
        'description' => null
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
    * id  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    * vulId  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulName  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulType  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    * cves  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    * ruleType  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    * queryInfo  queryInfo
    * imageInfo  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    * description  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'vulType' => 'vul_type',
            'cves' => 'cves',
            'ruleType' => 'rule_type',
            'queryInfo' => 'query_info',
            'imageInfo' => 'image_info',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    * vulId  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulName  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulType  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    * cves  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    * ruleType  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    * queryInfo  queryInfo
    * imageInfo  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    * description  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'vulType' => 'setVulType',
            'cves' => 'setCves',
            'ruleType' => 'setRuleType',
            'queryInfo' => 'setQueryInfo',
            'imageInfo' => 'setImageInfo',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    * vulId  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulName  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    * vulType  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    * cves  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    * ruleType  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    * queryInfo  queryInfo
    * imageInfo  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    * description  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'vulType' => 'getVulType',
            'cves' => 'getCves',
            'ruleType' => 'getRuleType',
            'queryInfo' => 'getQueryInfo',
            'imageInfo' => 'getImageInfo',
            'description' => 'getDescription'
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
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['cves'] = isset($data['cves']) ? $data['cves'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['queryInfo'] = isset($data['queryInfo']) ? $data['queryInfo'] : null;
        $this->container['imageInfo'] = isset($data['imageInfo']) ? $data['imageInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
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
    * @param string|null $id **参数解释**： 白名单ID **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**： 漏洞ID（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**： 漏洞名称（只在查询漏洞白名单时返回） **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulType
    *  **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType **参数解释**： 漏洞类型（只在查询漏洞白名单时返回） **取值范围**: - linux_vul：linux漏洞。 - app_vul：应用漏洞。
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets cves
    *  **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoCves[]|null
    */
    public function getCves()
    {
        return $this->container['cves'];
    }

    /**
    * Sets cves
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoCves[]|null $cves **参数解释**: 漏洞对应的CVE列表（只在查询漏洞白名单时返回） **取值范围**: 最小值0，最大值1000
    *
    * @return $this
    */
    public function setCves($cves)
    {
        $this->container['cves'] = $cves;
        return $this;
    }

    /**
    * Gets ruleType
    *  白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 白名单规则类型，包含如下：   -all_images : 白名单应用于全部镜像   -specific_image_types : 白名单应用于指定镜像类型(仅用于指定仓库镜像类型)   -specific_images : 白名单应用于指定镜像
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets queryInfo
    *  queryInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoQueryInfo|null
    */
    public function getQueryInfo()
    {
        return $this->container['queryInfo'];
    }

    /**
    * Sets queryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoQueryInfo|null $queryInfo queryInfo
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
    *  白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoImageInfo[]|null
    */
    public function getImageInfo()
    {
        return $this->container['imageInfo'];
    }

    /**
    * Sets imageInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageWhiteListDetailResponseInfoImageInfo[]|null $imageInfo 白名单规则为“specific_images”时，指定的镜像列表。只在查询镜像白名单详情时返回数据。
    *
    * @return $this
    */
    public function setImageInfo($imageInfo)
    {
        $this->container['imageInfo'] = $imageInfo;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
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
    * @param string|null $description **参数解释**： 白名单的描述信息 **取值范围**： 字符长度0-1024位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

