<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoteMirrorUpdateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoteMirrorUpdateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    * syncBranchType  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * mirroringEnabled  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * endpointUuid  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'syncBranchType' => 'string',
            'mirroringEnabled' => 'bool',
            'endpointUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    * syncBranchType  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * mirroringEnabled  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * endpointUuid  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'syncBranchType' => null,
        'mirroringEnabled' => null,
        'endpointUuid' => null
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
    * url  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    * syncBranchType  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * mirroringEnabled  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * endpointUuid  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'syncBranchType' => 'sync_branch_type',
            'mirroringEnabled' => 'mirroring_enabled',
            'endpointUuid' => 'endpoint_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    * syncBranchType  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * mirroringEnabled  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * endpointUuid  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'syncBranchType' => 'setSyncBranchType',
            'mirroringEnabled' => 'setMirroringEnabled',
            'endpointUuid' => 'setEndpointUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    * syncBranchType  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * mirroringEnabled  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * endpointUuid  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'syncBranchType' => 'getSyncBranchType',
            'mirroringEnabled' => 'getMirroringEnabled',
            'endpointUuid' => 'getEndpointUuid'
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
    const SYNC_BRANCH_TYPE_ALL = 'all';
    const SYNC_BRANCH_TYPE__DEFAULT = 'default';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncBranchTypeAllowableValues()
    {
        return [
            self::SYNC_BRANCH_TYPE_ALL,
            self::SYNC_BRANCH_TYPE__DEFAULT,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['syncBranchType'] = isset($data['syncBranchType']) ? $data['syncBranchType'] : null;
        $this->container['mirroringEnabled'] = isset($data['mirroringEnabled']) ? $data['mirroringEnabled'] : null;
        $this->container['endpointUuid'] = isset($data['endpointUuid']) ? $data['endpointUuid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 512)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSyncBranchTypeAllowableValues();
                if (!is_null($this->container['syncBranchType']) && !in_array($this->container['syncBranchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncBranchType', must be one of '%s'",
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
    * Gets url
    *  **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** 源仓地址。 **取值范围：** 不涉及。 **约束限制：** 以 http:// 或 https:// 开头。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets syncBranchType
    *  **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSyncBranchType()
    {
        return $this->container['syncBranchType'];
    }

    /**
    * Sets syncBranchType
    *
    * @param string|null $syncBranchType **参数解释：**  分支同步。 **取值范围：** - all，同步全部分支。 - default，同步默认分支。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSyncBranchType($syncBranchType)
    {
        $this->container['syncBranchType'] = $syncBranchType;
        return $this;
    }

    /**
    * Gets mirroringEnabled
    *  **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getMirroringEnabled()
    {
        return $this->container['mirroringEnabled'];
    }

    /**
    * Sets mirroringEnabled
    *
    * @param bool|null $mirroringEnabled **参数解释：**  开启定时同步 **取值范围：** - true，不开启定时同步。 - false，开启定时同步。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMirroringEnabled($mirroringEnabled)
    {
        $this->container['mirroringEnabled'] = $mirroringEnabled;
        return $this;
    }

    /**
    * Gets endpointUuid
    *  **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getEndpointUuid()
    {
        return $this->container['endpointUuid'];
    }

    /**
    * Sets endpointUuid
    *
    * @param string|null $endpointUuid **参数解释：**  拓展点UUID。 **取值范围：** 不涉及。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEndpointUuid($endpointUuid)
    {
        $this->container['endpointUuid'] = $endpointUuid;
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

