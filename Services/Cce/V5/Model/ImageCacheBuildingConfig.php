<?php

namespace HuaweiCloud\SDK\Cce\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageCacheBuildingConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageCacheBuildingConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cluster  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * imagePullSecrets  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cluster' => 'string',
            'imagePullSecrets' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cluster  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * imagePullSecrets  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cluster' => null,
        'imagePullSecrets' => null
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
    * cluster  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * imagePullSecrets  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cluster' => 'cluster',
            'imagePullSecrets' => 'image_pull_secrets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cluster  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * imagePullSecrets  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @var string[]
    */
    protected static $setters = [
            'cluster' => 'setCluster',
            'imagePullSecrets' => 'setImagePullSecrets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cluster  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * imagePullSecrets  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @var string[]
    */
    protected static $getters = [
            'cluster' => 'getCluster',
            'imagePullSecrets' => 'getImagePullSecrets'
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
        $this->container['cluster'] = isset($data['cluster']) ? $data['cluster'] : null;
        $this->container['imagePullSecrets'] = isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cluster'] === null) {
            $invalidProperties[] = "'cluster' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['cluster'])) {
                $invalidProperties[] = "invalid value for 'cluster', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets cluster
    *  **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
    * Sets cluster
    *
    * @param string $cluster **参数解释：** 构建镜像缓存所启动的临时Pod所在的Autopilot集群的UID。 **约束限制：** 要求使用的Autopilot集群版本为v1.28.8-r0或v1.31.4-r0以上版本。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCluster($cluster)
    {
        $this->container['cluster'] = $cluster;
        return $this;
    }

    /**
    * Gets imagePullSecrets
    *  下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @return string[]|null
    */
    public function getImagePullSecrets()
    {
        return $this->container['imagePullSecrets'];
    }

    /**
    * Sets imagePullSecrets
    *
    * @param string[]|null $imagePullSecrets 下载所需缓存镜像的访问凭证列表，不填写或无有效凭证时仅支持下载公共镜像。
    *
    * @return $this
    */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->container['imagePullSecrets'] = $imagePullSecrets;
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

