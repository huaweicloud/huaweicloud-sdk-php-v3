<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepositoryGeneralCommitRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepositoryGeneralCommitRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rejectUnsignedCommits  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    * rejectNotSignedByGpg  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    * denyDeleteTag  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    * preventSecrets  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    * denyForcePush  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rejectUnsignedCommits' => 'bool',
            'rejectNotSignedByGpg' => 'bool',
            'denyDeleteTag' => 'bool',
            'preventSecrets' => 'bool',
            'denyForcePush' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rejectUnsignedCommits  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    * rejectNotSignedByGpg  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    * denyDeleteTag  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    * preventSecrets  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    * denyForcePush  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rejectUnsignedCommits' => null,
        'rejectNotSignedByGpg' => null,
        'denyDeleteTag' => null,
        'preventSecrets' => null,
        'denyForcePush' => null
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
    * rejectUnsignedCommits  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    * rejectNotSignedByGpg  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    * denyDeleteTag  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    * preventSecrets  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    * denyForcePush  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rejectUnsignedCommits' => 'reject_unsigned_commits',
            'rejectNotSignedByGpg' => 'reject_not_signed_by_gpg',
            'denyDeleteTag' => 'deny_delete_tag',
            'preventSecrets' => 'prevent_secrets',
            'denyForcePush' => 'deny_force_push'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rejectUnsignedCommits  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    * rejectNotSignedByGpg  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    * denyDeleteTag  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    * preventSecrets  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    * denyForcePush  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'rejectUnsignedCommits' => 'setRejectUnsignedCommits',
            'rejectNotSignedByGpg' => 'setRejectNotSignedByGpg',
            'denyDeleteTag' => 'setDenyDeleteTag',
            'preventSecrets' => 'setPreventSecrets',
            'denyForcePush' => 'setDenyForcePush'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rejectUnsignedCommits  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    * rejectNotSignedByGpg  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    * denyDeleteTag  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    * preventSecrets  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    * denyForcePush  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'rejectUnsignedCommits' => 'getRejectUnsignedCommits',
            'rejectNotSignedByGpg' => 'getRejectNotSignedByGpg',
            'denyDeleteTag' => 'getDenyDeleteTag',
            'preventSecrets' => 'getPreventSecrets',
            'denyForcePush' => 'getDenyForcePush'
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
        $this->container['rejectUnsignedCommits'] = isset($data['rejectUnsignedCommits']) ? $data['rejectUnsignedCommits'] : null;
        $this->container['rejectNotSignedByGpg'] = isset($data['rejectNotSignedByGpg']) ? $data['rejectNotSignedByGpg'] : null;
        $this->container['denyDeleteTag'] = isset($data['denyDeleteTag']) ? $data['denyDeleteTag'] : null;
        $this->container['preventSecrets'] = isset($data['preventSecrets']) ? $data['preventSecrets'] : null;
        $this->container['denyForcePush'] = isset($data['denyForcePush']) ? $data['denyForcePush'] : null;
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
    * Gets rejectUnsignedCommits
    *  **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getRejectUnsignedCommits()
    {
        return $this->container['rejectUnsignedCommits'];
    }

    /**
    * Sets rejectUnsignedCommits
    *
    * @param bool|null $rejectUnsignedCommits **参数解释：** 是否拒绝未Signed-off-by签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未Signed-off-by签名的提交。 - false，允许未Signed-off-by签名的提交。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRejectUnsignedCommits($rejectUnsignedCommits)
    {
        $this->container['rejectUnsignedCommits'] = $rejectUnsignedCommits;
        return $this;
    }

    /**
    * Gets rejectNotSignedByGpg
    *  **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getRejectNotSignedByGpg()
    {
        return $this->container['rejectNotSignedByGpg'];
    }

    /**
    * Sets rejectNotSignedByGpg
    *
    * @param bool|null $rejectNotSignedByGpg **参数解释：** 是否拒绝未GPG签名的提交。 **约束限制：** 不涉及。 **取值范围：** - true，拒绝未GPG签名的提交。 - false，允许未GPG签名的提交。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRejectNotSignedByGpg($rejectNotSignedByGpg)
    {
        $this->container['rejectNotSignedByGpg'] = $rejectNotSignedByGpg;
        return $this;
    }

    /**
    * Gets denyDeleteTag
    *  **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getDenyDeleteTag()
    {
        return $this->container['denyDeleteTag'];
    }

    /**
    * Sets denyDeleteTag
    *
    * @param bool|null $denyDeleteTag **参数解释：** 是否不允许删除Tags。 **约束限制：** 不涉及。 **取值范围：** - true，不允许删除Tags。 - false，允许删除Tags。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDenyDeleteTag($denyDeleteTag)
    {
        $this->container['denyDeleteTag'] = $denyDeleteTag;
        return $this;
    }

    /**
    * Gets preventSecrets
    *  **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getPreventSecrets()
    {
        return $this->container['preventSecrets'];
    }

    /**
    * Sets preventSecrets
    *
    * @param bool|null $preventSecrets **参数解释：** 是否阻止包含涉密文件的提交。 **约束限制：** 不涉及。 **取值范围：** - true，阻止包含涉密文件的提交。 - false，允许包含涉密文件的提交。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPreventSecrets($preventSecrets)
    {
        $this->container['preventSecrets'] = $preventSecrets;
        return $this;
    }

    /**
    * Gets denyForcePush
    *  **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getDenyForcePush()
    {
        return $this->container['denyForcePush'];
    }

    /**
    * Sets denyForcePush
    *
    * @param bool|null $denyForcePush **参数解释：** 是否禁止强制推送。 **约束限制：** 不涉及。 **取值范围：** - true，禁止强制推送。 - false，允许强制推送。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDenyForcePush($denyForcePush)
    {
        $this->container['denyForcePush'] = $denyForcePush;
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

