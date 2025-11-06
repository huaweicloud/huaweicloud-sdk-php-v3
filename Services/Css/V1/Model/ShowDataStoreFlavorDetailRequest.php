<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDataStoreFlavorDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDataStoreFlavorDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    * datastoreVersionId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreId' => 'string',
            'datastoreVersionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    * datastoreVersionId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreId' => null,
        'datastoreVersionId' => null
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
    * datastoreId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    * datastoreVersionId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreId' => 'datastore_id',
            'datastoreVersionId' => 'datastore_version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    * datastoreVersionId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreId' => 'setDatastoreId',
            'datastoreVersionId' => 'setDatastoreVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    * datastoreVersionId  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreId' => 'getDatastoreId',
            'datastoreVersionId' => 'getDatastoreVersionId'
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
        $this->container['datastoreId'] = isset($data['datastoreId']) ? $data['datastoreId'] : null;
        $this->container['datastoreVersionId'] = isset($data['datastoreVersionId']) ? $data['datastoreVersionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datastoreId'] === null) {
            $invalidProperties[] = "'datastoreId' can't be null";
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
    * Gets datastoreId
    *  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDatastoreId()
    {
        return $this->container['datastoreId'];
    }

    /**
    * Sets datastoreId
    *
    * @param string $datastoreId **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch：cf7e2c8f-096c-4fcf-b174-1ebe060679fb。 Opensearch：07ec9f86-ec2f-49e7-8913-373003aedf32。 Logstash: 575276bb-87e5-4e18-8e1e-e748d8ad3a06。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDatastoreId($datastoreId)
    {
        $this->container['datastoreId'] = $datastoreId;
        return $this;
    }

    /**
    * Gets datastoreVersionId
    *  **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDatastoreVersionId()
    {
        return $this->container['datastoreVersionId'];
    }

    /**
    * Sets datastoreVersionId
    *
    * @param string|null $datastoreVersionId **参数解释**： 引擎类型id。 **约束限制**： 不涉及 **取值范围**： Elasticsearch 7.10.2：01f53413-0a58-4b0c-848a-f625846bae23。 Opensearch 2.19.0：11a9df5c-711f-496c-866d-a4521c179671。 Logstash 7.10.0: f5609cf0-3514-49ef-87db-a3df2858a46f。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDatastoreVersionId($datastoreVersionId)
    {
        $this->container['datastoreVersionId'] = $datastoreVersionId;
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

